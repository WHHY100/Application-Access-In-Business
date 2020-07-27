<?php


namespace App\Content;

use App\Database\AbstractConnDatabase;

class ReadContent extends AbstractConnDatabase
{
    const CONCATE_STRING = "|";
    const PAGES = ['Aplikacje_acces', 'Kurs_sql', 'Kurs_access'];

    /**
     * @param string $page
     * @return array
     */
    public function getContent(string $page): array
    {
        return $this->content($page);
    }

    /**
     * @param string $page
     * @return array
     */
    protected function content(string $page): array
    {
        switch ($page) {
            case null:
                $arrayValuesDB = ['naglowek_glowna_strona', 'przycisk_1', 'zdjecie_sciezka',
                    'przycisk_2', 'przycisk_3', 'przycisk_4', 'strona_glowna_podnaglowek',
                    'strona_czesc_o_autorze', 'link_github'];
                return $this->rightValues($arrayValuesDB);
            case self::PAGES[0]:
                $arrayValuesDB = ['Pobierz_aplikacje_tytul', 'Pobierz_aplikacje_tresc'];
                return $this->rightValues($arrayValuesDB);
            case self::PAGES[1]:
                $arrayValuesDB = ['kurs_sql_tytul', 'kurs_sql_podtytul'];
                return $this->rightValues($arrayValuesDB);
            case self::PAGES[2]:
                $arrayValuesDB = ['kurs_access_tytul', 'kurs_access_podtytul'];
                return $this->rightValues($arrayValuesDB);
        }

        $arrayValuesDB = [];
        return $arrayValuesDB;
    }

    /**
     * @param array $values
     * @return array
     */
    protected function rightValues(array $values): array
    {
        $strSQL = null;

        for ($i = 0; $i < count($values); $i++) {
            $strSQL = $strSQL . "'" . $values[$i] . "'" . ", ";
        }

        $order = "SELECT * FROM content_page WHERE strona_czesc in (" . substr($strSQL, 0, strlen($strSQL) - 2)
            . ")";

        $this->takeValues();
        $this->startConnection($this->host, $this->user, $this->password, $this->nameDb);

        $resultDatabase = mysqli_query($this->mysqlHandle, $order);

        $arrayResult = [];
        $i = 0;

        while ($result = mysqli_fetch_row($resultDatabase)) {
            $finString = null;

            for ($j = 0; $j < count($result); $j++) {
                $finString = $finString . $result[$j] . self::CONCATE_STRING;
            }

            $arrayResult[$i] = $finString;
            $i++;
        }


        $this->closeDatabase($this->mysqlHandle);

        return $arrayResult;
    }
}