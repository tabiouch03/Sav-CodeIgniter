<?php 

class Client extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('client_model');
    }

    public function views() 
    {
        $data['clients'] = $this->client_model->get_client();
        $data['title'] = 'Liste des clients';
        $this->load->view('templates/header', $data);
        $this->load->view('client/clientView', $data);
        $this->load->view('templates/footer');
    }

    public function client($id) {
        $data['client'] = $this->client_model->get_client($id);
        $data['title'] = $data['client']['nomClient'];
        $this->load->view('templates/header', $data);
        $this->load->view('client/oneClient', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomClient', 'NomClient', 'required');
        $this->form_validation->set_rules('numClient', 'NumClient', 'required');
        $this->form_validation->set_rules('adresse', 'Adresse', 'required');
        $this->form_validation->set_rules('numTel', 'NumTel', 'required');
        $this->form_validation->set_rules('mail', 'Mail', 'required');

        $data['title'] = 'Formulaire Client';
        if ($this->form_validation->run() === FALSE ) {
            $this->load->view('templates/header', $data);
            $this->load->view('client/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->client_model->setClient();
            $this->load->view('templates/success');
        }
    }

    public function update($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->client_model->get_by_id('client');
    }

}