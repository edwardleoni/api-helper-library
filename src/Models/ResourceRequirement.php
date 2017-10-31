<?php namespace Rtbs\ApiHelper\Models;

use Carbon\Carbon;

class ResourceRequirement
{
    private $resource_group_rn;
    private $pax;
    private $activity_rn;


    /**
     * @param int $resource_group_rn
     */
    public function set_resource_group_rn($resource_group_rn)
    {
        $this->resource_group_rn = $resource_group_rn;
    }


    /**
     * @return int
     */
    public function get_resource_group_rn()
    {
        return $this->resource_group_rn;
    }


    /**
     * @param int $pax
     */
    public function set_pax($pax)
    {
        $this->pax = $pax;
    }


    /**
     * @return int
     */
    public function get_pax()
    {
        return $this->pax;
    }


    /**
     * @param int $activity_rn
     */
    public function set_activity_rn($activity_rn)
    {
        $this->activity_rn = $activity_rn;
    }


    /**
     * @return int
     */
    public function get_activity_rn()
    {
        return $this->activity_rn;
    }



}