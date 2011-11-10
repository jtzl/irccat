<?
/**
    Don't add stupid commands about ponies or paris hilton :)
**/
$input = $_SERVER['argv'][1];
$toks = explode(" ",$input);
$nick = array_shift($toks);
$channel = array_shift($toks);
$sender = array_shift($toks);
$first = array_shift($toks);

// switch on first word (the command word)
// print "nick: $nick  channel: $channel  sender: $sender  first: $first \n";

switch($first){
    
    case 'uptime':
	$output = shell_exec("uptime");
	print $output;

        break;

    case 'date':
        print `date`;
        print "Unix time: ".`date +%s`;
        break;

    case 'df':
        print `df -h | grep "^/dev"`;
        break;

    default:
        print "$nick wants to '$first', but I don't know how\n";
	#	$output = shell_exec("echo '#testchan1 zup' | netcat 127.0.0.1 12345");
        break;

	case 'blah':
		print "blah blah blah\n";
		break;



}

exit;


?>
