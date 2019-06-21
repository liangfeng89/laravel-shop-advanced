<?php

return [
    'alipay' => [
        'app_id'         => '2016081900289780',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0Qqer3YEkWUe2Qp/3NAkQAISuRUEPQuJlMqCILM/Cgb0XzVp8UjjyTZm9W5lO3WZkTMV1HGO89iFe4dhzjSGLzIlLclhJ+Q5N/+I1CWmwmMHTwkbBD5xcI9TTiCgUIG1kj8nH5KT4OkjoyZwdMHvKbItEAJ1fAoOK2euPC0Rlc77HvmHiaIp2XsehaQPUTYnOklAuMpG1mFJgfdkdQKdjXvnB7N1Mmp37WNkPtMYuVXp4OmHv8z3zBKVjd1cV26WXMXJSxX5IfoXXF47byJGw7aJRFEZZtM/1XTEi4seGTVeoE7wUBD0af2UiljwLUgMfEyLB2SzzXlY6IA2SQy2JwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA3zibiJc4qfI5NrWLSwwQgkFtSHfR5yvLQKqtfOgdXrMWq4qGle4DBeBmZwMvHcD2vZIFAgZjB55LORMgqGhpk0vrHd98cBdUYqlxHaazI+5z/s1eE7ZM/inLpEs6gZefkKbPVIk5jiv4k2MqAgpEBlbXSpMfp7AEfPMWBfj847fJgn/o+GpYOJuVORdoXmCgYjqnnPHh9v3UmstGcKOH+7VPtmCIsr8CQPd0jQgeBjE3okDB9Br7RIKqN9B4LkI4Ou5PEWyCJMpE7Bezhpd8jWGmoaphT9wmlOTn4NK/sfg0ANl1g73YZNK4BesQ1DqZSOs5zOnYg/yeGbAlZawGzwIDAQABAoIBAHvVRouHANte0hikrCqs/beVHlA2kI7DP9WXGfmSN0Di7y+pALLKQIkRDR4WqRvDgd521Cpkaqm+ShLWpqZmjjM1ybBf3AO/HYRCZctCQF0tmtH/EjKzTpEtlJiHV2SvPckckSZfnjtd71+sgpBxK32szXDEn6oCPusmW9BiacDVmkgh7c5XF8caEvvMAKtdteN9uoESLqY/zNIrRGnuswZrkA6mJDIiDuwpvDaaSlsVJYV7NX6P2F6VbXilm2aqRJ76MxMtNb5FkOlZl+/58Mvj7u0pRONrKMTOsaVyeppogj+OTdBeP/MJsh0AGadBS99m12klKKwCd3MpEW2SmDkCgYEA8bsZ2YZIKKpMikfh0tVgBn8DQ3kCT+FSP3M02saYurzmM3XIk427ZhZt8uV/mNPwAIt1JTS/xL6jsnXI6go1fAaN0+tsigMhvxzxXf++yQvdCooBY/kMauDXv0niTslq1lzC9ZHuNosYfj/ijLAOjYqnVMO2Vl2yAjNvlcFwb50CgYEA7GXMRaXTBtzpYxma8no/iMo3KKn/PxtreKM9LNrEYAbyRWvVLPV7z7iMVZva8/IwiYRWqexgOhNlKtIgFjRm5ZWh4x4OKHPSJHbI/FoV/XnPSKqnESYAPUNhax1bQcn2ze2J52Ij5mxtllcnE+ov+yYngzfv7zmVZfVxkkNvolsCgYAyhkrW3mxCo6Wv2Wpn6NVTRkTmW2qSS6QnQusvNwdBMK5k3x93R859ff6pIDLVPKcTVhK8HhRfCQGqEVhXIp8fNzd5reFXz2PEUEZawVOdLe+bflDgFnPz+t7dSpIUqaC9AVJ2hXPmzpfl+3Bcu4evKeXjn6yCzL6iGyIdiPr5OQKBgQCh4tSQnY52FLJ++vnxM2Zu9ovvfPse7FgctS0fmnEAkcE3aTEDKNkw1uDDf4fhpuk2QzpWA1mia8XMHTl7+0a70kyai+qGKUqvTek1ZzvH6bLZwIPIao2fZpVAFUp5MyWgwBrAKaUMFxS079oC+U0CYI6OfbAB0x1MRVkRIL1CIQKBgGut1NmtMz+SGZBHlJPFfnWIFGIVBQcVAJRgNhgmG/Al7zvMfndPy7ul/eYuo0/6TzyeAafnStJgxPZRQgTbMj/XWtJ8RVqKl8BV2/+GYp6PqumeanFsflMsFm8Rtjs07WmE4vbz7ZRhfu5gUmc2STLo1fRhRLOcDQpCFi0Jhaoj',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',   // 公众号 app id
        'mch_id'      => '',  // 第一步获取到的商户号
        'key'         => '', // 刚刚设置的 API 密钥 ，这个是自己生成的可以是随机字符串
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),  // 在支付宝商付平台上面下载的
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),   // 在支付宝商付平台上面下载的
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];