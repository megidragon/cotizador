class CampaignService
{
    insertCampaignRequestNotContractMassConsumption(payload)
    {
        let headers = {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }

        return axios.post('/v1/cotizador/basic-information', payload, headers)
    }
}

export default new CampaignService();
