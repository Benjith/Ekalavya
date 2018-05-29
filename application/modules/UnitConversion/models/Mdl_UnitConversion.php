<?php

class Mdl_UnitConversion extends CI_Model{
    public function unitConversionViewAll(){
        $this->db->select('t1.unitConversionId, t2.unitName as mainUnit, t3.unitName as conversionUnit,t1.conversionRate, t1.description');
        $this->db->from('unitConversion_tbl as t1');
        $this->db->join('unit_tbl as t2','t2.unitId=t1.unitId','inner');
        $this->db->join('unit_tbl as t3','t3.unitId=t1.conversionUnitId','inner');        
        $query=$this->db->get();
        return $data=$query->result();
    }
}