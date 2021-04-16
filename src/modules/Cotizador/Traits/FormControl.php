<?php
namespace Modules\Cotizador\Traits;

use App\Exceptions\StepNotAllowedException;
use Illuminate\Http\Request;
use Infrastructure\Model\FormData;
use Infrastructure\Model\FormStep;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

trait FormControl
{
    private function resetSteps($budgetNumber)
    {
        FormStep::findOrFail($budgetNumber)->delete();
    }

    private function setForm($data)
    {
        $policyCode = $this->getPolicyCode();

        $formData = FormData::find($policyCode);
        if (!$formData)
        {
            $formData = new FormData();
            $formData->budget_number = $policyCode;
            $formData->save();
        }

        $formData->update($data);
    }

    private function getForm()
    {
        $policyCode = $this->getPolicyCode();

        return FormData::findOrFail($policyCode);
    }

    private function setStep($step)
    {
        $policyCode = $this->getPolicyCode();
        FormStep::firstOrCreate(['budget_number' => $policyCode])->update(['current_step' => $step]);
    }

    private function getStep()
    {
        $policyCode = $this->getPolicyCode();
        try {
            return FormStep::findOrFail($policyCode)->current_step;
        } catch (\Exception $e)
        {
            return 1;
        }
    }

    private function isAllowed(int $step): bool
    {
        try {
            return $this->getStep() == $step;
        } catch (\Exception $e)
        {
            // If budget number is down or not step register is cocindered 0, so first step must be 1
            return $step == 1;
        }
    }

    private function getPolicyCode()
    {
        $policyCode = session()->get('policyCode');
        if (empty($policyCode))
        {
            throw new \Exception('Unauthorized action', 401);
        }

        return $policyCode;
    }
}
