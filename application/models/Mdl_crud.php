<?php 
/**
* muhammad andi al-rizki
* muhammad.andialrizki@gmail.com
* 11/11/2016
* model crud untuk helper penanganan proses crud
*/
class Mdl_crud extends CI_Model
{
	
	public function add($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	public function check($table, $where = '')
	{
		/* mereturn 0 || > 0 */
		if (!empty($where)) {
			$this->db->where($where);
		}
		return $this->db->get($table)->num_rows();
	}
	public function pull($table, $where = '', $order_by = '')
	{
		if (!empty($where)) {
			$this->db->where($where);
		}
        if (!empty($order_by)) {
            $this->db->order_by($order_by['col'], $order_by['type']);
        }
		return $this->db->get($table);
	}
	public function pull_select($select, $table, $where = '')
	{
		$this->db->select($select);
		if(!empty($where))
			$this->db->where($where);
		return $this->db->get($table);
	}
	public function pull_group($table, $where, $group)
	{
		$this->db->where($where);
		$this->db->group_by($group);
		return $this->db->get($table);
	}
	public function pull_like($table, $where, $like)
	{
		return $this->db->like($like['col'], $like['match'], (empty($like['pos']) ? 'both' : $like['pos']))->where($where)->get($table);
	}
	public function pull_join($select = '', $table, $where = '', $joinTableCond)
	{
		if (!empty($select)) {
			$this->db->select($select);
		}
		foreach ($joinTableCond as $jt) {
			if (empty($jt['type'])) $this->db->join($jt['table'], $jt['cond']); else $this->db->join($jt['table'], $jt['cond'], $jt['type']);
		}
		if (!empty($where)) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}
	public function edit($table, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}
	public function remove($table, $where)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}
}

 ?>