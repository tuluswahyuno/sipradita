<?php
/**
 * Models       : Caramel datatables
 * Created      : Mohamad Yasir
 * CodeIgniter  : 3.*
 */
    class caramel extends CI_Model
    {
        // function __construct()
        // {
        //     parent::__construct();
        // }


        function get_json($plain_query){
            $dynamic_query = [];

            $is_limit = false;
            $is_offset = false;
            $is_order = false;
            $is_search = false;
            $is_filtered = false;


            $columns = [];
            if ($this->input->get('columns')){
               $columns = $this->input->get('columns'); 
            }
            if ($this->input->get('search') and $this->input->get('search')['value'] != ''){
                $is_search = true;
                $search = htmlspecialchars($this->input->get('search')['value']);
            }
            if ($this->input->get('order')){
                $is_order = true;
                $order = $this->input->get('order');
            }
            if ($this->input->get('length')){
                $is_limit = true;
                $limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$this->input->get('length')}");
            }
            if (!is_null($this->input->get('start'))){
                $is_offset = true;
                $offset = preg_replace("/[^a-zA-Z0-9.]/", '', "{$this->input->get('start')}");
            }

            if ($is_search or $is_order or $is_limit or $is_offset){
            }
            array_push($dynamic_query, 'select * from (');
            array_push($dynamic_query, $plain_query);
            array_push($dynamic_query, ') dat');
            $plain_query_nolimit = $dynamic_query;
            $plain_query_nolimit = implode("\n", $plain_query_nolimit);
            // var_dump($dynamic_query);
            // exit();
            $search_sql = '';
            $counter_searchable = 0;
            foreach ($columns as $column){
                // var_dump($column['searchable']);
                if ($column['searchable'] == true and ($column['data'] != null or $column['data'] != '')){
                    $counter_searchable = $counter_searchable + 1;
                }
            }
            if ($is_search){
                $counter_loop = 0;
                if ($counter_searchable == 1){
                    foreach ($columns as $column){
                        if ($column['searchable'] == true and ($column['data'] != null or $column['data'] != '')){
                            $search_sql = $search_sql.$column['data'].' like '."'%".$search."%'";
                        }
                    }
                }else if($counter_searchable > 1){
                    foreach ($columns as $column){
                        if ($column['searchable'] == true){
                            if ($column['data'] != null or $column['data'] != ''){
                                $counter_loop = $counter_loop + 1;
                                if ($counter_loop < $counter_searchable){
                                    $search_sql = $search_sql.$column['data'].' like '."'%".$search."%' or ";
                                }else if ($counter_loop == $counter_searchable){
                                    // var_dump($column['data']);
                                    $search_sql = $search_sql.$column['data'].' like '."'%".$search."%'";
                                }
                            }
                        }
                    }
                }

            }
            // exit();

            if ($is_search and $counter_searchable > 0){
                array_push($dynamic_query, "
                        where ".$search_sql."
                    ");
            }

            if ($is_order){
                array_push($dynamic_query, "
                         order by ".$columns[$order[0]['column']]['data']." ".$order[0]['dir']."
                    ");
            }

            $dynamic_query_nolimit = $dynamic_query;

            if ($is_limit){
                array_push($dynamic_query, "
                        limit ".$limit."
                    ");
            }
            if ($is_offset){
                array_push($dynamic_query, "
                        offset ".$offset."
                    ");
            }
            if (count($dynamic_query) > 0){
                $is_filtered = true;
                $dynamic_query = implode("\n", $dynamic_query);
                $dynamic_query_nolimit = implode("\n", $dynamic_query_nolimit);
            }
            // var_dump($dynamic_query);
            // exit();
            $sql_count = $this->db->query($plain_query_nolimit)->num_rows();
            $sql_count_filtered = $sql_count;
            if ($is_filtered){
                $sql_count_filtered = $this->db->query($dynamic_query_nolimit)->num_rows();
                $data = $this->db->query($dynamic_query)->result_array();
            }else{
                $data = $this->db->query($plain_query)->result_array();
            }

            $callback = array(    
                'draw' => $this->input->get('draw'),  
                'recordsTotal' => $sql_count,    
                'recordsFiltered'=>$sql_count_filtered,    
                // 'recordsFiltered'=>$sql_count,    
                'data'=>$data
            );
            header('Content-Type: application/json');
            return json_encode($callback); 
        }

    }