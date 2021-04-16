class DataProvider
{
    canI(step)
    {
        return axios.get(`/v1/form-control/can-i/${step}`)
    }

    getCurrentStep()
    {
        return axios.get(`/v1/form-control/get-current-step`)
    }

    getLocalities(postal_code)
    {
        return axios.get(`/v1/data-provider/localities/${postal_code}`)
    }

    getProvince(postal_code)
    {
        return axios.get(`/v1/data-provider/provinces/${postal_code}`)
    }

    getCountries(postal_code)
    {
        var args = {};
        if (typeof postal_code != "undefined")
        {
            args['postal_code'] = postal_code;
        }
        return axios.get('/v1/data-provider/countries', args)
    }

    getDocumentTypes()
    {
        return axios.get('/v1/data-provider/document-types')
    }

    getGender()
    {
        return axios.get('/v1/data-provider/gender')
    }

    getForm()
    {
        return axios.get('/v1/form-control/get-form-stored-data')
    }
}

export default new DataProvider();
