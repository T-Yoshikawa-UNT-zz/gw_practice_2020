<?php

namespace App\File;

use SplFileObject;

/**
 * Description of GetCsvFile
 */
class CsvFile {

    public $fileObject;
    public $data;

    public function __construct($path) {
        $data = file_get_contents($path);
        //文字コードの変換（UTF-8 → SJIS-win）
        $data = mb_convert_encoding($data, 'UTF-8', 'SJIS-win');
        // 一時ファイルの作成
        $temp = tmpfile();
        // メタデータからファイルパスを取得して読み込み
        $meta = stream_get_meta_data($temp);
        // 一時ファイル書き込み
        fwrite($temp, $data);
        // ファイルポインタの位置を先頭に
        rewind($temp);
        //--------------------------------------------------
        // ファイルの読み込み
        //--------------------------------------------------
        // CSVファイルの読み込み
        $this->fileObject = new SplFileObject($meta['uri'], 'rb');
        $this->fileObject->setFlags(SplFileObject::READ_CSV);
        $this->fileObject->setCsvControl("\t", "\"");
    }

}
