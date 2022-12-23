<?
//
// #InstanceTicker 
// /mod/v.php
// (C)2022 weepjp. Released under the MIT license.
// https://github.com/InstanceTicker/InstanceTicker/
//

function svg_err($str){ // エラー表示用のSVG（不採用になったSVGの再利用）
    $result = "";
    $result = '<!-- #MiyonTicker SVG --><svg version="1.1" id="Tic_a" xmlns="http://www.w3.org/2000/svg" x="0" y="0"><style>#Tic_d{fill:#fff; font:bolder 11px Arial; text-shadow:#278 1px 1px,#278 -1px 1px,#278 1px -1px,#278 -1px -1px;}</style><g id="Tic_b"><linearGradient id="Tic_B" gradientUnits="userSpaceOnUse" x1="1" y1="1" x2="240" y2="20"><stop offset="0" stop-color="#278"/><stop offset=".65" stop-color="#278"/><stop offset="1" stop-color="#278" stop-opacity="0"/></linearGradient><path fill="url(#Tic_B)" d="M0 0H240V20H0Z" /></g><g id="Tic_c"><image class="Tic_i" x="2" y="2" width="16px" height="16px" href="data:image/webp;base64,UklGRm4AAABXRUJQVlA4IGIAAAAwAgCdASoQABAAAcAsJbACdAEPAQ6bGLc/gADifmmXhpJcLash8Wqby8ByuWe9UYA7J9yUJHKDuIOtzuQz9UXMASfw7x6yloPSIrv/2cdfnkEc5+5X/ipivwbP2lEVdnAAAA=="></image></g><text id="Tic_d" transform="translate(22 14)">#MiyonTicker:'.$str.';</text></svg>';
    return $result;
}




if($mod==1){// 不正なURLかcheck
    
    //list mod の順で最新バージョン確認
    $verkey = $version3.$mversion3;
    header('Cache-Control:no-cache,no-store,must-revalidate,max-age=0,post-check=0,pre-check=0');
    header('Pragma:no-cache');
    header("Content-Type: image/webp");
    header('Access-Control-Allow-Origin: *');

    if($ext2[0]=='_v' and $ext2[1]==$verkey){ //おつかいのバージョンは最新
        
        $ramuu = rand(0, 3);
        
        switch($ramuu){//ランダム表示
            case 1://normal
                echo base64_decode('UklGRiIKAABXRUJQVlA4WAoAAAASAAAALwAARgAAQU5JTQYAAAAAAAD/AABBTk1G4gYAAAAAAAYAAC8AADoAAIgTAAJBTFBIXwAAAAEPMP8REcJRZNtOdMnLL+EbIUj7SEPKl/CW5HTv5BEQ0f8JgIwZgNoc0IexA+wYD2A8xuNwKx3Hg/UzYXymM/IqPjWQU/ENRn4UK3VqpyAO9TfDTt1KfhSRnKiesx8BAFZQOCBiBgAA0B0AnQEqMAA7AD59NJBHpKMhoTf+OqiQD4lqAMl/wsRIbL4e2i543TY95urKvgv3oPHvsz6gP8B0amZT7JfivIbvB96n8h6gXrj/B71nVrxlfpv+k8C79c/HL3I+p3+g9S388/zP5ne83effSf657AH8j/nH+Y/pX5I/SR+9/8D/KfmP7UPl3/lf4z90voE/ln8+/2X9x/I35qvWx+w3sTfriU1m11GKTIMN0gl4S/mA1c++Zpx1LKB6ExVyKYDObnPdPSA9E+5jLsdwhcspVy3foEAUsg/coQsULlTjvKwjit2M2IvtVfxjWJwXAxqLK56cPPlEAAD++YPYue+0BDTelly13F7Qag7iYtpNkJEH/6tt6hkihb1Dbige8jmt89FsLxRgy+4liSU24ZvmQuiRlKUx51ZqEk08/cYyZYb2C4gLfZgq0P9EhI95u5OvgxE4ADllX3LeonceRVhaGJ/FqQAKWU2YNMsL7fxAmzDr4Dr/20faig65F792vKYenvW7IBw+H0aAHwrFFKXOC8M/UxO+RcT7NBVMqkfifJFyrvaqPzvqg29e9xnuX2LBIBbWHjrQRjQIXHNhPeasPd0I2xfc9/qgxTLMzY83POJQYAzONkO6Sd7d++hWAyDn3RGjx3JvxTOwWeiXMHNfRiZj1Ekv5VO3jkJYWQpYxB/NadPPAHE8CTOIKibwBUd+SOIfRMlof8KCfLNnHjmx5/79IHFG3LJfFNFKobXmdDq82evWSXFoPHlp6dETGGJtPQiWUr52aVQoHO7/eMXRMKVdrnS0RpMTrgVCVQcVR2iDe6t+qvA7iU9J+xyiEq4aK3FwapvyIMH96hlnPwxi/CLtPfYHSFJetilC/U/SGaGPx2FPMThvZAf8/kQ6MEu+pLlOnh+Ql8g1UxiQwv857KRsMD6wf8zXfpVZsRxYZ1rmhs3IsbW2lRBApZZ2J+sf81Gmc3yciJGswDxOqpuzOtVfeH0hWmIUZOQWBf2iafWY2Aq7F/Fsj5aHeaAph06ChYRk/h9ZFNDMUf6fbMcs2Jbwp3Udlqym1HrOI3orqlzmZj+FVnX+q/gkgIfz7GORhC9FdmwIEvQ8ijUImSFj3CDagNIuWjV8tpU7AY6dnyktp/MayYe4VMbw1G5RikXngj7X+FjHRu6dAke18nJO8U/fGrmlh4R5eMM2dKftgRXhA7e7MN1ygQbHr1ut3TrhfT7orYrb3iDia3JgcQorYBeJlHgRD1/O0zgyC4d3XgRF+YyGG7WLJ1md+Kct8JhHNBMawtcpIGzZlYCepcvi/kJgkcHdTFkfDwKb6eLbOAmLCxfPy0KeQQG+Rl1VvL+sOrlRKAlNUkeUBXPyU9syQJpUYXTvVTfmnBpzo4MBL/X1aRaqQ64U+/wCOyGvj21MTePl5pkIncm+uqF1oVVHDEj4fDCJBlKhx3JiRJgwftXJ/t/2wmUF3NJp/u1AMh5V+3KS5g9eyidSVXM3p59IQ+5eN0Ov5ldxBja7t98NIIZVNsNJZOOoTy3m99XanJ6iKP/WPyIGdgd45cbOBtx6cFGwwW1QxJngvNU33c1Huk0CgmvTirFLT4uUtwrdifm1rUsYxmNA9WgPPBh//QcAxwqcf8lq9rXfuqRY+l0OjnfyI+fNO4RUm7hcwTd1+E7K2J9YNzGQqoKE/o/iN0qguhM+RU2F1GyAvJnK/1wce4L62VtOhGlItYkJ9UA/05egrj10L+HN+XP/DpmWqxAPxmjGQ5nZBzerG43gMIpVrQv4v9DCJxpH2WV+NybzoWCo3ZKSqIFxkpzPao/+3cMt7sgWWTtYxTUEI+cD8pWSvFtANyOt8wIy05V8+qnNl0L66fC/m8unWKnUZ9YQH/3Vf5n2B+SDv8xG4wM+j2uWmrKvdyHTjnno7z+MteXYN2/F4w2y8gRGvAdhio026S36g8+AiWPU8NpdLwaRIkYjHywfhHge5Kf2Fw+MRqDjhTlw/0FXXYxB19qedoZ+xmomRRpqHulX+2qSPjVcPTBw3VWJVpnFB3wRF50cwYEJtrNRcvJWjbjdK6HmSKu9SJu3D898MY3sHh6GFZ3tEGAfh/zsbpF/6uaVwMwE8+rp5VMLHo6ogr0OXEzO0EVD0AU+tTzjmsXfDL3LyC/8VwYieAFiL946GrRJpm381r7e2gzgAABBTk1G6AAAAAcAABQAABIAAAgAAFAAAABWUDgg0AAAAPQEAJ0BKhMACQA+kTiXR4MAgAABIJaAC06b0B5QHKY/cBxgH6gDohdhS+HSfFxpQAD9AzsWdr3//NhTvHn73+5ncfcZ7M0iPDUd41/pO/WdD77qXftP/uNW5oF8fJBjAq8mF8aJqJm9UnyL3wamrugwXUof74FbN+O7gVJH/yUH/unQJ986QQyudUTNEBzGbSvp1hi4K/PmrwOUXwLij/49/mpL/8Z+GsbCmTAVZnXsF76PNf8K8hWOyDuz5gFIlDigYg8lA3WVhlUzINwAAABBTk1G/AAAAAcAABQAABIAAAkAAFAAAABWUDgg5AAAAPQEAJ0BKhMACgA+kTqXR4MAgAABIJYwCdMoAoYDyy5n/UAG5KWRixYwAMR5RdaYAAD+nCSNtWa5/2GEMkH+upP91ZHf/LYf0M/5hlkMf0Whmb7rdQj+vT1fqKNHz9NruVKVkL4rZW2Y8he80mn/6NVsbcvm2Vx2m7wKvUT3Yjeb5BtVVRn/91TXvLnzV2gzi+H6OZ5ol1nBwPPt0zX4qEc3b10pnyI0/r3+4gf/H9+rbh35ceSC/IpC3/QR/+LD/iw/8e7D/Jt+nQ9U7U+CSLUvz1y8LC8wzina2J+1qD8FRzQAAEFOTUYYAQAABwAAFAAAEgAACQAAUAAAAFZQOCAAAQAAFAUAnQEqEwAKAD6ROJdHgwCAAAEglkALTvaANiVmZ/djxgH6qjohdzfYrOPOKBgWQAD9AzsWdvv//Nh+uRGf/vgXmbuDm+FjAq5JfxXxeb0iuniKJYZf3HIjYW8W/hwxji76aKzBr5U+Rl+NDh4X/0nhCX9Kix6K03To1o/vKtbf7xHTP1Ev5tlcdMi173lPknA2v7h7+YRYNr/7y580iZEDsTyLjGozaV9OsMXBX581eBvtIr/Jef/1d/NUh/77/+GtjDdWgKvRE6Ps6F3r/wrx5YV3I7clZ/zwf/kaf6WH/jx/P8uT9N+06hUt0iEDtyi9nfulva2JqkjRjeSAAA==');
            break;
            
            
            case 2://muhuhu
                echo base64_decode('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');
            break;
            
            
            case 3://smile
                echo base64_decode('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');
            break;
            
            
            default://smile
                echo base64_decode('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');
            break;
        
        }//$con .= $ext2[1].' == '.$verkey;
        
        
        echo $con;
        exit;
        
    
    }else{ //update
        echo base64_decode('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');
        //$con .= $ext2[1].' != '.$verkey;
    }
    
    echo $con;
    exit;


}else{
    //不正なURL。例：/mod/**.php に直接アクセスした場合など。
    $con = svg_err('ERROR');
    
    header('Content-Type: image/svg+xml');
    header('Access-Control-Allow-Origin: *');
    echo ($con);
    exit;

}// URL check おわり







?>