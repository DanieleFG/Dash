<?php

class Admin {
    public $link = 'http://tickets.fabricadeideias.com/api/list-tickets-paginated/155025/1?page=1&rows=100&order_dir=asc&v_filter=false&v_filter_param=null&p_filter=false&p_filter_param=null&t_filter=false&t_filter_param=null&s_filter=true&s_filter_param=1&search_param=desenvolvimento&search_type=grupo%20responsavel';
    public $content;
    public $listCritica;
    public $listAlta;
    public $listMedia;
    public $listBaixa;
    public $linkTicket = 'http://tickets.fabricadeideias.com/#/tickets/';

    public function fetchAPI()
    {
        return $this->content = $this->sendRequest($this->link);
    }

    public function sendRequest($url)
    {
        try{
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
            $resultado = json_decode(curl_exec($ch), true);
            curl_close($ch);
            return $resultado;
        }catch (Exception $e) {
            return "Erro - ". $e;
        }
    }
    public function lengthTickets()
    {
        return $this->content['tickets']['total_rows'];
    }
    public function listPrioridade()
    {        
        foreach($this->content['tickets']['rows'] as $nivel1) {
            if($nivel1['cod_prioridade'] == 1){
                $this->listCritica[] =  $nivel1;
            }
            if($nivel1['cod_prioridade'] == 2){
                $this->listAlta[] =  $nivel1;
            }
            if($nivel1['cod_prioridade'] == 3){
                $this->listMedia[] =  $nivel1;
            }
            if($nivel1['cod_prioridade'] == 4){
                $this->listBaixa[] =  $nivel1;
            }
        }
    }
    public function listPrioridadeResponsavel($responsavel)
    {    
        $lisTicketResponsavel = [];
        $link = "http://tickets.fabricadeideias.com/api/list-tickets-paginated/155025/1?page=1&rows=100&order_dir=asc&v_filter=false&v_filter_param=null&p_filter=false&p_filter_param=null&t_filter=false&t_filter_param=null&s_filter=true&s_filter_param=1&search_param=".urlencode($responsavel)."&search_type=responsavel";
        // $link = "http://tickets.fabricadeideias.com/api/list-tickets-paginated/155025/1?page=1&rows=100&order_dir=asc&v_filter=false&v_filter_param=null&p_filter=false&p_filter_param=null&t_filter=false&t_filter_param=null&s_filter=false&s_filter_param=null&search_param=&search_type=t%C3%ADtulo";

        $lisTicketResponsavel = $this->sendRequest($link);
        if($lisTicketResponsavel){
            return $lisTicketResponsavel['tickets']['rows'];
        }
        return $lisTicketResponsavel;
    }
    public function gerarLink()
    {
        // foreach($this->listCritica)
    }
}

// $admin = new Admin();
// echo "<pre>";
// $result = $admin->fetchAPI();
// print_r($result);
// print_r($result['tickets']['total_rows']);