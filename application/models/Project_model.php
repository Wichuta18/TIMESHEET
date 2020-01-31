<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_model extends CI_Model
{

	private $lastQuery = '';

	function __constuct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert($data)
	{
		$this->db->insert("projects", $data);
	}

	function select_data($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("projects");
		$this->lastQuery = $this->db->last_query();
		return $query;
	}

	function getTotalrows()
	{
		$sql = explode('LIMIT', $this->lastQuery);
		$query = $this->db->query($sql[0]);
		$result = $query->result();
		return count($result);
	}

	function getTeam()
	{
		$this->db->order_by('NameTeam', 'ASC');
		$query = $this->db->get('members');
		return $query->result();
	}

	function delete($id)
	{
		$this->db->delete('projects', array('idProject' => $id));
	}

	function update($id)
	{
		$data = array(
			"projectCode" => $this->input->post("projectCode"),
			"projectName" => $this->input->post("projectName"),
			"budget" => $this->input->post("budget"),
			"team" => $this->input->post("team"),
			"startDate" => $this->input->post("startDate"),
			"endDate" => $this->input->post("endDate")
		);
		$this->db->where(array('idProject'=>$id));
		$this->db->update("projects", $data);
	}

	function getbyID($id){
		return $this->db->get_where('projects',array('idProject'=>$id))->row();
	}
}
