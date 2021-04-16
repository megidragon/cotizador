class SalesForceService
{
    sendForm(payload)
    {
        let headers = {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }

        return axios.post('/v1/sales-force/first', payload, headers)
    }
}

export default new SalesForceService();
