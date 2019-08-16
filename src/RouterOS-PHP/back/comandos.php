<?php

    $id = $_GET['valor'] ?? '';  
    $ipaddr = $_GET['address'] ?? '';

    switch($id){

        case 1: 
            $output[0] = [
                "cpu" => getting("cpu", ""),
                "ram" => By2M(getting("ram", "")),
                "time" => getting("time", ""),
            ];
       
            $regex = "/(\S+):\s+(\S.*)/";
            preg_match_all($regex, getting("table", ""), $matchs1);

            $output[1] = [
                "version" => $matchs1[2][1],
                "buildTime" => $matchs1[2][2],
                "totalMemory" => $matchs1[2][4],
                "cpu" => $matchs1[2][5],
                "totalHddSpace" => $matchs1[2][10],
                "architectureName" => $matchs1[2][13],
                "platform" => $matchs1[2][15],
            ];

            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
            
            echo json_encode($output);
            break;

        case 2:

            $regex = "/\d\s+(\S)\s+(\S+)\s+(\S+)\s+(\d+)/";
            preg_match_all($regex, getting("interfaces", ""), $matchs1);
            $result = [];
            foreach( $matchs1[0] as $index=>$value ){
                $result[] = [
                    "online" => $matchs1[1][$index],
                    "name" => $matchs1[2][$index],
                    "type" => $matchs1[3][$index],
                    "mtu" => $matchs1[4][$index],
                ];
            }

            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
            
            echo json_encode($result);
            break;
        case 3: 

            $regex = "/\d\s+(\S)\s+(\S+)\s+(\S+)\s+(\d+)/";
            preg_match_all($regex, getting("wifi", ""), $matchs1);
            $result = [];
            foreach( $matchs1[0] as $index=>$value ){
                $result[] = [
                    "online" => $matchs1[1][$index],
                    "name" => $matchs1[2][$index],
                    "type" => $matchs1[3][$index],
                    "mtu" => $matchs1[4][$index],
                    "tx" => $matchs1[5][$index],
                    "rx" => $matchs1[6][$index],
                ];
            }
    
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
            
            echo json_encode($result);
        break;
    
        case 4: 
    
            $regex = "/(\d+\.\d+\.\d+\.\d+\/\d+)\s+(\d+\.\d+\.\d+\.\d+)\s+(.+\d+)/";
            preg_match_all($regex, getting("list", ""), $matchs3);
            $result1 = [];
                foreach( $matchs3[0] as $index=>$value ){
                    $result1[] = [
                        "address" => $matchs3[1][$index],
                        "network" => $matchs3[2][$index],
                        "interface" => $matchs3[3][$index],
                    ];
                }
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result1);
        break;
    
        case 5:
    
            $regex = "/\s.{2}\s(\d+\.\d+\.\d+\.\d+)\s+(.*:\C{2})\s(.{6}|.{5})/";
            preg_match_all($regex, getting("arp", ""), $matchs3);
            $result1 = [];
                foreach( $matchs3[0] as $index=>$value ){
                    $result1[] = [
                        "ip" => $matchs3[1][$index],
                        "mac" => $matchs3[2][$index],
                        "interface" => $matchs3[3][$index],
                    ];
                }
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result1);
        break;
    
        case 6:
    
            $regex = "/\s+(\S+\d)\s+(\S+)\s+(\S+)\s+(\S+)\s+(\d+\.\d\.\d\.\d+\/\d+)/";     
            preg_match_all($regex, getting("dhcp", ""), $matchs3);
            $result1 = [];
                foreach( $matchs3[0] as $index=>$value ){
                    $result1[] = [
                        "interface" => $matchs3[1][$index],
                        "use" => $matchs3[2][$index],
                        "addDefautRoute" => $matchs3[3][$index],
                        "status" => $matchs3[4][$index],
                        "address" => $matchs3[5][$index],
                    ];
                }
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result1);
        break;
    
        case 7: 
    
            $regex = "/\s(\d)\s+..(\S+)\s+(\S+)\s+(\S+)\s+(\S+)\s/";
            preg_match_all($regex, getting("dhcpServer", ""), $matchs);
            $result = [];
                foreach( $matchs[0] as $index=>$value ){
                    $result[] = [
                        "name" => $matchs[2][$index],
                        "interface" => $matchs[3][$index],
                        "addressPool" => $matchs[4][$index],
                        "leaseTime" => $matchs[5][$index],
                    ];
                }
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result);
        break;
    
        case 8: 
             
            $regex = "/name=(\S+)\s\S+\suser=(\S+)\spap=(\S+)\schap=(\S+)/";
            preg_match_all($regex, getting("pppClient", ""), $matchs);
            $result = [];
                foreach( $matchs[0] as $index=>$value ){
                    $result[] = [
                        "user" => $matchs[2][$index], 
                        "serviceName" => $matchs[1][$index],
                        "pap" => $matchs[3][$index],
                        "chap" => $matchs[4][$index],
                    ];
                }
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result);
        break;
    
        case 9:
    
            $regex = "/port=(\S+)\spap=(\S+)\schap=(\S+)\s\S+\s\S+=(\S+)\n\s+\S+=(\S+)/";
            preg_match_all($regex, getting("pppServer", ""), $matchs);
            $result = [];
                foreach( $matchs[0] as $index=>$value ){
                    $result[] = [
                        "port" => $matchs[1][$index], 
                        "address" => $matchs[4][$index],
                        "pap" => $matchs[2][$index],
                        "chap" => $matchs[3][$index],
                    ];
                }
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result);
        break;
    
        case 10:
            
            $result = getting("ping", $ipaddr);
    
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result);
        break;
    
        case 11:
    
            $result = getting("logs", "");
            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
    
            echo json_encode($result);
        break;

        case 12:

            $regex = "/( .x-bits)\S+\s+(.+)kbps/";
            preg_match_all($regex, getting("graph", ""), $matchs1);
            $result = [];
            foreach( $matchs1[0] as $index=>$value ){
                $result[] = [
                    "send" => $matchs1[1][$index],
                    "value" => $matchs1[2][$index],
                ];
            }

            header("Content-type: application/json; charset=UTF-8");
            header("Access-Control-Allow-Origin: *");
            
            echo json_encode($result);
            break;

        case 13:
    
            $result = getting("vlan", "");

        break;

        case 14:
    
            $result = getting("bridge", "");

        break;
    }

function getting ( $tipo , $ipaddr ){
        
        $ip = $_GET['ip'] ?? '192.168.0.28';
        $user = $_GET['user'] ?? 'admin';
        $pass = $_GET['pass'] ?? '';

        switch($tipo){

            case "cpu":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);

                $stream = ssh2_exec($connection, ':put [/system resource get cpu-load]');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
                break;

            case "ram":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);

                $stream = ssh2_exec($connection, ':put [/system resource get free-memory]');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
                By2M($output);
                break;

            case "time":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
                
                $stream = ssh2_exec($connection, ':put [/system resource get uptime]');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
                break;

            case "table":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
                
                $stream = ssh2_exec($connection, '/system resource print without-paging');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
                break;

            case "interfaces":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
                
                $stream = ssh2_exec($connection, '/interface print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
                break;

            case "wifi": 
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
                
                $stream = ssh2_exec($connection, '/interface wireless print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
                break;

            case "list":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
            
                $stream = ssh2_exec($connection, '/ip address print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "arp":           
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
        
                $stream = ssh2_exec($connection, '/ip arp print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "dhcp":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
    
                $stream = ssh2_exec($connection, '/ip dhcp-client print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;


            case "dhcpServer":    
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
    
                $stream = ssh2_exec($connection, '/ip dhcp-server print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "pppClient":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);

                $stream = ssh2_exec($connection, '/interface ppp-client print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "pppServer":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);

                $stream = ssh2_exec($connection, '/interface ppp-server print');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "ping":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);

                $stream = ssh2_exec($connection, "/ping count=4 ${ipaddr}");
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "logs":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);

                $stream = ssh2_exec($connection, "/log print");
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);
            break;

            case "graph":
                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
                
                $stream = ssh2_exec($connection, '/interface monitor-traffic aggregate once');
                stream_set_blocking($stream, true);
                $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
                $output = stream_get_contents($stream_out);

            break;

            case "vlan":
                $name = $_POST['nome-inter'] ?? '';
                $mtu = $_POST['mtu'] ?? '';
                $arp = $_POST['arp-inter'] ?? '';
                $vlan = $_POST['vlan-id-inter'] ?? '';
                $inter = $_POST['interface'] ?? '';

                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
    
                $stream = ssh2_exec($connection, "/interface vlan add name=${name} mtu=${mtu} arp=${arp} vlan-id=${vlan} interface=${inter}");
                
                header('Location: ../index.php?page=interfaces');
                  
            break;

            case "bridge":
                $name = $_POST['nome-inter'] ?? '';
                $arp = $_POST['arp-inter'] ?? '';

                $connection = ssh2_connect($ip, 22);
                ssh2_auth_password($connection, $user, $pass);
    
                $stream = ssh2_exec($connection, "/interface bridge add name=${name} arp=${arp}");
                
                header('Location: ../index.php?page=interfaces');
                  
            break;

        }
        
        return $output;
    }

    function By2M($size){
        $filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
        return $size ? round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i] : '0 Bytes';
    }
?>