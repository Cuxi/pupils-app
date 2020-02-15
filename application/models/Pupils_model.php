<?php
class Pupils_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_pupils($dni = FALSE)
        {
                if ($dni === FALSE)
                {
                        $query = $this->db->get('alumno');
                        return $query->result_array();
                }
                $this->db
                ->select('*')
                ->from('alumno')
                ->where('DNI' , $dni);
                $queryAlumno = $this->db->get();

                $this->db
                ->select('telefono')
                ->from('telefono')
                ->where('DNI' , $dni);
                $queryTelefono = $this->db->get();

                $query = array_merge($queryAlumno->result(),$queryTelefono->result());
                return $query;
        }

        public function set_pupils()
        {
            $this->load->helper('url');

            $data = array(
              'DNI' => $this->input->post('DNI'),
              'Nombre' => $this->input->post('Nombre'),
              'Apellidos' => $this->input->post('Apellidos'),
              'Nacimiento' => $this->input->post('Nacimiento')
            );

            return $this->db->insert('alumno', $data);
        }

        public function delete_pupil()
        {
          $this->load->helper('url');

          $this->db->where('DNI', $this->input->post('DNI'));
          $this->db->delete('alumno', 'asignatura');
          return $this->db->affected_rows();
        }

        public function update_pupil()
        {
          $this->load->helper('url');

          $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Apellidos' => $this->input->post('Apellidos'),
            'Nacimiento' => $this->input->post('Nacimiento')
          );

          $this->db->where('DNI', $this->input->post('DNI'));
          $this->db->update('alumno', $data);
          return $this->db->affected_rows();
        }
}
