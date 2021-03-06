<?php

class Mdl_Common extends CI_Model
{
    function BankAndCashSelectFill(){
        $query= $this->db->query('select t1.ledgerId,t1.ledgerName from ledger_tbl t1 
        where t1.accountId in(select accountId from (select accountId, 1 as hierarchyLevel from account_tbl where accountId in(44,48))as t2)');
        return $query->result();
    }

    function PurchaseSelectBill(){
    	$query=$this->db->query('select t1.ledgerId,t1.ledgerName from ledger_tbl t1 where t1.accountId in(select accountId from (select accountId, 1 as hierarchyLevel from account_tbl where accountId in(16))as t2)');
    	return $query->result();
    }

    function CashOrPartySelectBill(){
        $query= $this->db->query('select t1.ledgerId,t1.ledgerName from ledger_tbl t1 
        where t1.accountId in(select accountId from (select accountId, 1 as hierarchyLevel from account_tbl where accountId in(48,21,22))as t2)');
        return $query->result();
    }

    function SalesSelectFill(){
        $query=$this->db->query('select t1.ledgerId,t1.ledgerName from ledger_tbl t1 where t1.accountId in(select accountId from (select accountId, 1 as hierarchyLevel from account_tbl where accountId in(18))as t2)');
    	return $query->result();
    }

    function ProductCodeSelectFill(){
        $query=$this->db->query('select t1.productId,t1.productCode from product_tbl t1 order by t1.productId asc');
        return $query->result();
    }

    function ProductNameSelectFill(){
        $query=$this->db->query('select t1.productId,t1.productName from product_tbl t1 order by t1.productId asc');
        return $query->result();
    }

    function UnitSelectFill(){
        $query=$this->db->query('select t1.unitId,t1.unitName from unit_tbl t1 order by t1.unitId asc');
        return $query->result();
    }

}