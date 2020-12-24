<?php

function ModelN1($Form1)
{
    $data_array = array(
        'nama' => $Form1['namaN1'],
        'gender' => $Form1['genderN1'],
        'ttl' => $Form1['ttlN1'],
        'wargaNegara' => $Form1['wargaNegaraN1'],
        'agama' => $Form1['agamaN1'],
        'pekerjaan' => $Form1['pekerjaanN1'],
        'tempatTinggal' => $Form1['tempatTinggalN1'],
        'nasab' => $Form1['nasabN1'],
        'status' => $Form1['statusN1'],
        'namaPasanganLama' => $Form1['namaPasanganLamaN1']
    );
    return $data_array;
}

function Val($var)
{
    if (file_exists('./FormPage/var/html/heallo.php')) {
        require_once './FormPage/var/html/heallo.php';
        $data = 'value="<?= ' . $var . ' ?>';
        return $data;
    }
}

function Name($var)
{
    $data = '<?= ' . $var . ' ?>';
    return $data;
}
