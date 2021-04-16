class AddressService
{
    send(payload)
    {
        let headers = {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }

        return axios.post('/v1/cotizador/normalize-address', payload, headers)
    }
}

export default new AddressService();
