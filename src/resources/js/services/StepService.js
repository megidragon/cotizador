class StepService
{
    sendForm(step, payload)
    {
        let headers = {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }

        return axios.post('/v1/cotizador/step/'+step, payload, headers)
    }
}

export default new StepService();
