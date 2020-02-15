<?php
class Subject extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('subject_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['subject'] = $this->subject_model->get_grade_pupil();
                $data['title'] = "Pupils' average grade";

                $this->load->view('templates/header', $data);
                $this->load->view('subject/index', $data);
                $this->load->view('templates/footer');
        }


        public function view($dni = NULL)
        {
                $data['subject_item'] = $this->subject_model->get_grade($dni);

                if (empty($data['subject_item']))
                {
                        show_404();
                }
                $data['title'] = "Pupil's averages";

                $this->load->view('templates/header', $data);
                $this->load->view('subject/view', $data);
                $this->load->view('templates/footer');
        }

        public function create($dni = NULL)
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a new average';
            $data['dni'] = $dni;
            $this->form_validation->set_rules('Asignatura', 'Asignatura', 'required');
            $this->form_validation->set_rules('Nota', 'Nota', 'required');
            $this->form_validation->set_rules('DNI', 'DNI', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('subject/create');
                $this->load->view('templates/footer');

            }
            else
            {
              if ($this->subject_model->set_grade()!==0)
              {
                $this->load->view('templates/header', $data);
                $this->load->view('subject/success');
                $this->load->view('templates/footer');
              }
              else
              {
                $data['title'] = 'Could\'t create the new average';
                $this->load->view('templates/header', $data);
                $this->load->view('subject/create');
                $this->load->view('templates/footer');
              }
            }
        }

        public function delete($dni = NULL)
          {
              $this->load->helper('form');
              $this->load->library('form_validation');

              $data['title'] = 'Delete an average';
              $data['dni'] = $dni;

              $this->form_validation->set_rules('DNI', 'DNI', 'required');
              $this->form_validation->set_rules('Asignatura', 'Asignatura', 'required');

              if ($this->form_validation->run() === FALSE)
              {
              $this->load->view('templates/header', $data);
              $this->load->view('subject/delete');
              $this->load->view('templates/footer');
              }
              else
              {
                if ($this->subject_model->delete_grade()!==0)
                {
                  $this->load->view('templates/header', $data);
                  $this->load->view('subject/deleteRealized');
                  $this->load->view('templates/footer');
                }
                else
                {
                  $data['title'] = 'Could\'t delete the average';
                  $this->load->view('templates/header', $data);
                  $this->load->view('subject/delete');
                  $this->load->view('templates/footer');
                }
              }
          }


          public function update($dni = NULL)
          {
              $this->load->helper('form');
              $this->load->library('form_validation');

              $data['title'] = 'Update an average';
              $data['dni'] = $dni;

              $this->form_validation->set_rules('Asignatura', 'Asignatura', 'required');
              $this->form_validation->set_rules('Nota', 'Nota', 'required');
              $this->form_validation->set_rules('DNI', 'DNI', 'required');

              if ($this->form_validation->run() === FALSE)
              {
              $this->load->view('templates/header', $data);
              $this->load->view('subject/update', $data);
              $this->load->view('templates/footer');
              }
              else
              {
                if ($this->subject_model->update_grade()!==0)
                {
                  $this->load->view('templates/header', $data);
                  $this->load->view('subject/updateRealized');
                  $this->load->view('templates/footer');
                }
                else
                {
                  $data['title'] = 'Could\'t update the average';
                  $this->load->view('templates/header', $data);
                  $this->load->view('subject/update', $data);
                  $this->load->view('templates/footer');
                }
              }
          }


}
