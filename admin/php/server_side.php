<?php

//shtimi tjeter
    include_once("dbConfig.php");
     
    // initilize all variable
    $params = $columns = $totalRecords = $data = array();

    $params = $_REQUEST;
    //define index of column
    $columns = array( 
        0 =>'ussername',
        1 =>'surname', 
        2 => 'email',
        3 => 'address',
        4 => 'salary'
    );
    $where = $sqlTot = $sqlRec = "";

    // check search value exist
    if( !empty($params['search']['value']) ) {   
        $where .=" WHERE ";
        $where .=" ussername LIKE ('".$params['search']['value']."%' )";    
        $where .=" OR surname LIKE ('".$params['search']['value']."%')";

        $where .=" OR email LIKE ('".$params['search']['value']."%' )";
    }
    // getting total number records without any search
    $sql = "SELECT ussername,surname,email,address,salary FROM  user ";
    $sqlTot .= $sql;
    $sqlRec .= $sql;
    //concatenate search sql if value exist
    if(isset($where) && $where != '') {

        $sqlTot .= $where;
        $sqlRec .= $where;
    }
  
// Instructions if $_POST['value'] exist
if( !empty($params['order']) ) {

    $sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

}

    // echo $sqlRec; die;
    $queryTot = mysqli_query($db, $sqlTot) or die("database error:". mysqli_error($db));

    $totalRecords = mysqli_num_rows($queryTot);

    //echo $sqlRec;die;
    $queryRecords = mysqli_query($db, $sqlRec) or die("error to fetch employees data");

    //iterate on results row and create new index array of data
    while( $row = mysqli_fetch_row($queryRecords) ) { 
        $data[] = $row;
    }   

    $json_data = array(
            "draw"            => intval( $params['draw'] ),   
            "recordsTotal"    => intval( $totalRecords ),  
            "recordsFiltered" => intval($totalRecords),
            "data"            => $data // total data array
            );

    echo json_encode($json_data);    // send data as json format
?>