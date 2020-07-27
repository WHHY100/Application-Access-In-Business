<?php


namespace App\Content;

use App\Database\AbstractConnDatabase;

class ReadTable extends AbstractConnDatabase
{
    /**
     * @param string $table
     * @return array
     */
    public function getResult(string $table): array
    {
        return $this->readTable($table);
    }

    /**
     * @param string $table
     * @return array
     */
    protected function readTable(string $table): array
    {
        $this->takeValues();
        $this->startConnection($this->host, $this->user, $this->password, $this->nameDb);

        $sqlString = "SELECT * FROM " . $table . " ORDER BY ID";

        $resultDatabase = mysqli_query($this->mysqlHandle, $sqlString);

        $arrayResult = [];
        $j = 0;

        while ($result = mysqli_fetch_row($resultDatabase)) {
            $finString = null;

            for ($i = 0; $i < count($result); $i++) {
                $finString = $finString . '|' . $result[$i];
            }

            $arrayResult[$j] = $finString;
            $j++;
        }

        $this->closeDatabase($this->mysqlHandle);

        return $arrayResult;
    }
}