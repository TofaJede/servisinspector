<?php
/**
 * Created by PhpStorm.
 * User: krystofkosut
 * Date: 01.01.18
 * Time: 22:14
 */

class defaultModel
{
    private $_mysqli;
    public  $_table;

    /**
     * defaultModel constructor.
     * @param $mysqli object
     * @param $table string
     */
    public function __construct($mysqli, $table)
    {
        $this->_mysqli  = $mysqli;
        $this->_table   = $table;
    }

    /**
     * @param $insert array
     * @return bool|integer
     */
    public function add($insert)
    {
        $add = $this->_mysqli->insert($this->_table, $insert);
        if ($add) {
            $last_id = $this->_mysqli->lastid();
            return $last_id;
        }
        else {
            return FALSE;
        }
    }

    /**
     * @param $id integer
     * @return array|bool
     */
    public function getById($id)
    {
        $query = "SELECT * FROM {$this->_table} WHERE id={$id}";
        if( $this->_mysqli->num_rows( $query ) > 0 )
        {
            $result = $this->_mysqli->get_row( $query );
            //	die(var_dump($result));
            return $result;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * @param null $limit
     * @param bool $count
     * @param null $where
     * @return array|integer
     */
    public function getAll($limit = NULL, $count = FALSE, $where = NULL)
    {
        $query = "SELECT * FROM {$this->_table}";
        if ($limit != NULL) {
            $query .= " LIMIT ".$limit;
        }
        if ($where != NULL) {
            $query .= " WHERE ".$where;
        }
        if ($count === TRUE) {
            $num_rows = $this->_mysqli->num_rows( $query );
            return $num_rows;
        } else {
            $result = $this->_mysqli->get_results($query);
            return $result;
        }

    }

    /**
     * @param $update array
     * @param $where array
     * @return bool
     */
    public function edit($update, $where)
    {
        $result 	= $this->_mysqli->update( $this->_table, $update, $where, 1 );
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $id integer
     * @return bool
     */
    public function delete($id)
    {
        $delete = array("id" => $id );

        $deleted = $this->_mysqli->delete($this->_table, $delete);
        if ($deleted) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}