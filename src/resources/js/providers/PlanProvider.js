class PlanProvider
{
    getPlan(id)
    {
        return axios.get(`/v1/cotizador/plan/${id}`);
    }

    getPlans()
    {
        return axios.get(`/v1/cotizador/plans`);
    }
}

export default new PlanProvider();
