<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Majesticmodels extends CI_Model {

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_data_product($table,$limit,$start,$keyword = null,$filter = null,$category = null)
    {
        if($keyword){
            $this->db->like('name', $keyword);
            $this->db->or_like('filter', $keyword);
            $this->db->or_like('category', $keyword);
            $this->db->or_like('short_desc', $keyword);
            $this->db->or_like('full_desc', $keyword);
        }
        if (!empty($filter)) {
            $this->db->where('filter', $filter);
        } 
        if (!empty($category)) {
            $this->db->like('category', $category);
        }

        return $this->db->get($table, $limit, $start);
    }
    
    public function get_where($table,$where)
    {
        return $this->db->get_where($table,$where);
    }

    public function get_orders($table,$where,$status)
    {
       $this->db->where('id_user', $where);
       $this->db->where('status', $status);
       return $this->db->get($table);
    }

    public function get_order($id)
    {
        
    }

    public function insert_data($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function insert_order_items($table,$data)
    {
        if (!empty($data) && is_array($data)) {
            return $this->db->insert_batch($table, $data);
        }
        return false;
    }

    public function insert_cust_data($table,$data)
    {
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }

        $insert = $this->db->insert($table,$data);
        return $insert?$this->db->insert_id():false;
    }

    public function update_data($data, $table,$id,$where)
    {   
        $this->db->where($id , $where);
        $this->db->update($table, $data);
    }

    public function delete_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function Checkimg($where,$table)
    {
        $query = $this->db->get_where($table,$where);
        return $query->row();
    }

    public function deleteimg($where,$table)
    {
        return $this->db->delete($table,$where);
    }
    public function getDailyTransactions() 
    {
       $query = "SELECT DATE_FORMAT(created, '%W %e %M %Y') AS formatted_date, SUM(sub_total) AS total_amount
                FROM orders
                GROUP BY DATE(created)
                ORDER BY DATE(created) ASC";
        return $this->db->query($query)->result();
    }

    public function getWeeklyTransactions() {
        $query = "SELECT WEEK(created) as week_number, SUM(sub_total) as total_amount
                  FROM orders
                  WHERE YEAR(created) = YEAR(NOW())
                  GROUP BY WEEK(created)
                  ORDER BY week_number";
        return $this->db->query($query)->result();
    }

    public function getMonthlyTransactions() {
        $query = "SELECT MONTH(created) as month_number, SUM(sub_total) as total_amount
                  FROM orders
                  WHERE YEAR(created) = YEAR(NOW())
                  GROUP BY MONTH(created)
                  ORDER BY month_number";
        return $this->db->query($query)->result();
    }

    public function getYearlyTransactions() {
        $query = "SELECT YEAR(created) as year, SUM(sub_total) as total_amount
                  FROM orders
                  GROUP BY YEAR(created)
                  ORDER BY year";
        return $this->db->query($query)->result();
    }
}
?>