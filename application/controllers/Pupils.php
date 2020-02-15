<?php
class Pupils extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pupils_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['pupils'] = $this->pupils_model->get_pupils();
                $data['title'] = "Pupils' information";
                error_log(print_r($data['pupils'],true));

                $this->load->view('templates/header', $data);
                $this->load->view('pupils/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($dni = NULL)
        {
                $data['pupils_item'] = $this->pupils_model->get_pupils($dni);
                if (empty($data['pupils_item']))
                {
                        show_404();
                }
                $data['title'] = "Pupil's data";
                // $data['DNI'] = $data['pupils_item']['DNI'];

                $this->load->view('templates/header', $data);
                $this->load->view('pupils/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a new pupil';

            $this->form_validation->set_rules('DNI', 'DNI', 'required');
            $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('Apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('Nacimiento', 'Nacimiento', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('pupils/create');
                $this->load->view('templates/footer');

            }
            else
            {
              if ($this->pupils_model->set_pupils()!==0)
              {
                $this->load->view('templates/header', $data);
                $this->load->view('pupils/success');
                $this->load->view('templates/footer');
              }
              else
              {
                $data['title'] = 'Could\'t create the new pupil';
                $this->load->view('templates/header', $data);
                $this->load->view('pupils/create');
                $this->load->view('templates/footer');
              }
            }
        }

        public function delete()
          {
              $this->load->helper('form');
              $this->load->library('form_validation');

              $data['title'] = 'Delete a pupil';

              $this->form_validation->set_rules('DNI', 'DNI', 'required');

              if ($this->form_validation->run() === FALSE)
              {
              $this->load->view('templates/header', $data);
              $this->load->view('pupils/delete');
              $this->load->view('templates/footer');
              }
              else
              {
                if ($this->pupils_model->delete_pupil()!==0)
                {
                  $this->load->view('templates/header', $data);
                  $this->load->view('pupils/deleteRealized');
                  $this->load->view('templates/footer');
                }
                else
                {
                  $data['title'] = 'Could\'t delete the pupil';
                  $this->load->view('templates/header', $data);
                  $this->load->view('pupils/delete');
                  $this->load->view('templates/footer');
                }
              }
          }


          public function update()
          {
              $this->load->helper('form');
              $this->load->library('form_validation');

              $data['title'] = 'Update a pupil';

              $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
              $this->form_validation->set_rules('Apellidos', 'Apellidos', 'required');
              $this->form_validation->set_rules('Nacimiento', 'Nacimiento', 'required');

              if ($this->form_validation->run() === FALSE)
              {
              $this->load->view('templates/header', $data);
              $this->load->view('pupils/update', $data);
              $this->load->view('templates/footer');
              }
              else
              {
                if ($this->pupils_model->update_pupil()!==0)
                {
                  $this->load->view('templates/header', $data);
                  $this->load->view('pupils/updateRealized');
                  $this->load->view('templates/footer');
                }
                else
                {
                  $data['title'] = 'Could\'t update the pupil';
                  $this->load->view('templates/header', $data);
                  $this->load->view('pupils/update', $data);
                  $this->load->view('templates/footer');
                }
              }
          }


}
