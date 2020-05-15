<?php
namespace App\Config;

/**
 * Description of JmaConnectConfig
 *
 * @author t-yoshikawa
 */
class JmaConnectConfig {

    /**
     * １時間降水量
     */
    const PRECIPITATION_1_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre1h00_rct.csv';

    /**
     * 3時間降水量
     */
    const PRECIPITATION_3_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre3h00_rct.csv';

    /**
     * 6時間降水量
     */
    const PRECIPITATION_6_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre6h00_rct.csv';

    /**
     * 12時間降水量
     */
    const PRECIPITATION_12_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre12h00_rct.csv';

    /**
     * 24時間降水量
     */
    const PRECIPITATION_24_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre24h00_rct.csv';

    /**
     * 48時間降水量
     */
    const PRECIPITATION_48_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre48h00_rct.csv';

    /**
     * 72時間降水量
     */
    const PRECIPITATION_72_HOUR_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/pre72h00_rct.csv';

    /**
     * 日降水量
     */
    const PRECIPITATION_DAY_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/predaily00_rct.csv';

    /**
     * 最新降水量
     */
    const PRECIPITATION_LATEST = 'https://www.data.jma.go.jp/obd/stats/data/mdrr/pre_rct/alltable/preall00_rct.csv';

}
