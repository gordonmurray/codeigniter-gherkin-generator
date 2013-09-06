<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Run extends CI_Controller
{

    public function index()
    {
        $test_result = 'passed';

        $scenario = $this->session->userdata('scenario');

        if (is_array($scenario) && !empty($scenario))
        {
            if (isset($scenario['url']) && $scenario['url'] != '')
            {
                /*
                 * first get the page content
                 */
                $url_content = $this->get_contents($scenario['url']);

                if ($url_content != '')
                {
                    //echo "There is content to test<Br /\n";

                    if (isset($scenario['results_array']) && !empty($scenario['results_array']))
                    {
                        $results = $scenario['results_array'];

                        //print_r($results);

                        foreach ($results as $result)
                        {
                            if ($result['result'] == 'see')
                            {
                                if (!stristr($url_content, $result['result_text']))
                                {
                                    //echo "testing " . $result['result'] . " in " . $url_content . "<br />\n";
                                    $test_result = 'failed';
                                    break;
                                }
                                else
                                {
                                    //echo "the text " . $result['result_text'] . " was correctly found<br />\n";
                                }
                            }
                            else
                            {
                                if (stristr($url_content, $result['result_text']))
                                {
                                    //echo "testing " . $result['result'] . " in " . $url_content . "<br />\n";
                                    $test_result = 'failed';
                                    break;
                                }
                            }
                        }
                    }
                }
                else
                {
                    $test_result = 'failed';
                }
            }
            else
            {
                $test_result = 'failed';
            }
        }
        else
        {
            $test_result = 'failed';
        }

        $this->session->set_flashdata('tests', $test_result);

        redirect('');
    }

    /**
     * Get the content of the remote page
     * @param type $url
     * @return type
     */
    function get_contents($url)
    {
        $data = file_get_contents($url);
        return $data;
    }

}

/* End of file run.php */
    /* Location: ./application/controllers/run.php */