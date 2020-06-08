<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
  }


  public function insert($tb, $values)
  {
    return $this->db->insert($tb, $values);
    // INSERT INTO mytable (field, field, field) VALUES ('data', 'data', 'data')
  }

  public function insert_batch($tb, $values)
  {
    return $this->db->insert_batch($tb, $values);
    // INSERT INTO mytable (field, field, field) VALUES ('data', 'data', 'data'), ('data', 'data', 'data')
  }

  public function update($tb, $values, $filter)
  {
    return $this->db->update($tb, $values, $filter);
    // UPDATE mytable SET field = 'data', field = 'data' WHERE key = 'data'
  }

  public function update_batch($tb, $values, $filter)
  {
    return $this->db->update_batch($tb, $values, $filter);
    // UPDATE mytable SET field = CASE 
    // WHEN field = 'data' THEN 'field'
    // WHEN field = 'data' THEN 'field'
    // ELSE 'field' END,
  }

  public function delete($tb, $filter)
  {
    return $this->db->delete($tb, $filter);
    // DELETE FROM mytable WHERE key = 'data'
  }

  public function getData($select, $tb, $join, $filter, $order)
  {
    $sql = $this->db->select($select);
    // SELECT field FROM mytable
    
    if($join!="")
    {
      // SELECT * FROM mytable JOIN table ON field.id = field.id
      for($i=0;$i<count($join);$i++){
        // $join = 2
        if($i%2!=0)
        {
          $sql = $this->db->join($join[$i-1],$join[$i]);
          // $this->db->join($i[1]('comments', $i[2]'comments.id = blogs.id');
        }
      }
    }

    if($order!="")
    {
      if(is_array($order)){
        $sql = $this->db->order_by($order[0],$order[1]);
        // SELECT * FROM mytable ORDER BY field DESC/ ASC, field DESC/ ASC
      }
      else{
        $sql = $this->db->order_by($order);
        // SELECT * FROM mytable ORDER BY field DESC/ ASC
      }
    }

    if($filter!="")
    {
      $sql = $this->db->where($filter);
      // SELECT * FROM mytable WHERE field = 'data'
    }

    if(is_array($tb)){
      $sql = $this->db->get($tb[0], $tb[1], $tb[2]);
      // SELECT field, field, field FROM mytable, table
    }
    else{
      $sql = $this->db->get($tb);
      // SELECT * myFROM table
    }

    return $sql;

  }

}

/* End of file Common_model.php */
/* Location: ./application/models/Common_model.php */