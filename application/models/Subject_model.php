<?php
class Subject_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_grade($dni = FALSE)
        {
                if ($dni === FALSE)
                {
                        $query = $this->db->get('asignatura');
                        return $query->result_array();
                }

                $query = $this->db->get_where('asignatura', array('dni' => $dni));
                return $query->result_array();
        }

        public function get_grade_pupil()
        {
                $query = $this->db->query("
                  SELECT
      	           DNI,
                   AVG(n.Nota) AS PromedioTotal
                  FROM
                      Asignatura n
                  GROUP BY
                      n.DNI");
                return $query->result_array();
        }

        public function set_grade()
        {
            $this->load->helper('url');

            $data = array(
              'Asignatura' => $this->input->post('Asignatura'),
              'Nota' => $this->input->post('Nota'),
              'DNI' => $this->input->post('DNI')
            );

            return $this->db->insert('asignatura', $data);
        }

        public function delete_grade()
        {
          $this->load->helper('url');
          $subject = $this->input->post('Asignatura');
          $dni = $this->input->post('DNI');
          $this->db->query("
          DELETE FROM asignatura WHERE DNI = '$dni' AND Asignatura = '$subject'
          ");
          return $this->db->affected_rows();
        }

        public function update_grade()
        {
          $this->load->helper('url');

          $data = array(
            'Asignatura' => $this->input->post('Asignatura'),
            'Nota' => $this->input->post('Nota')
          );

          $this->db->where('DNI', $this->input->post('DNI'));
          $this->db->update('asignatura', $data);
          return $this->db->affected_rows();
        }
}
