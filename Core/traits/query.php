<?php

trait Query
{
    public function find($id, $table, $conn)
    {
        $S = "SELECT * FROM $table WHERE id='$id'";
        $Q = mysqli_query($S, $conn);
        return mysqli_fetch_assoc($Q);
    }

    public function query($sql, $conn, $type = "")
    {
        $qry = mysqli_query($conn, $sql);
        switch ($type) {
            case 'assoc':
                return mysqli_fetch_assoc($qry);
                break;
            case 'all':
                return mysqli_fetch_all($qry, MYSQLI_ASSOC);
                break;
            default:
                return 1;
                break;
        }
    }

    public function destroy($id, $table, $conn)
    {
        $sql = "DELETE FROM $table WHERE id='$id'";
        return mysqli_query($conn, $sql) ? 1 : 0;
    }
}
