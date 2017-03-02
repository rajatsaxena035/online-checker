<?php
class Dbinsert extends CI_Model {


        public function __construct()
        {
                $this->load->database();
        }

        public function student()
        {
                $data = array(
                        'name' => $this->input->post('name'),
                        'roll' => $this->input->post('roll'),
                        'q1' => $this->input->post('q1'),
                        'q2' => $this->input->post('q2'),
                        'q3' => $this->input->post('q3'),
                        'q4' => $this->input->post('q4'),
                        'q5' => $this->input->post('q5'),
                        'q6' => $this->input->post('q6'),
                        'q7' => $this->input->post('q7'),
                        'q8' => $this->input->post('q8'),
                        'q9' => $this->input->post('q9'),
                        'q10' => $this->input->post('q10'),
                        'q11' => $this->input->post('q11'),
                        'q12' => $this->input->post('q12'),
                        'q13' => $this->input->post('q13'),
                        'q14' => $this->input->post('q14'),
                        'q15' => $this->input->post('q15'),
                        'q16' => $this->input->post('q16'),
                        'q17' => $this->input->post('q17'),
                        'q18' => $this->input->post('q18'),
                        'q19' => $this->input->post('q19'),
                        'q20' => $this->input->post('q20'),
                        'q21' => $this->input->post('q21'),
                        'q22' => $this->input->post('q22'),
                        'q23' => $this->input->post('q23'),
                        'q24' => $this->input->post('q24'),
                        'q25' => $this->input->post('q25'),
                        'q26' => $this->input->post('q26'),
                        'q27' => $this->input->post('q27'),
                        'q28' => $this->input->post('q28'),
                        'q29' => $this->input->post('q29'),
                        'q30' => $this->input->post('q30'),
                        'feedback' => $this->input->post('feedback') 
                );

                    $query = $this->db->get('master');
                    $marks = 0;
                    $i=0;
                    foreach ($query->result() as $row)
                    {
                        $i++;
                        $str = 'q'.$i;
                        if($row->ans == $data[$str])
                        {
                            $marks++;
                        }
                    }
                    $data['marks'] = $marks;
                    $this->db->insert('student', $data);
                    $flag = $this->db->affected_rows();
                    $response['marks'] = $marks;
                    $response['flag'] = $flag;
                    return $response;
        }

}