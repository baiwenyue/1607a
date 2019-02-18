<?php
function flower($n)//水仙花数
{
    $bw=substr($n,0,1);
    $sw=substr($n,1,1);
    $gw=substr($n,2,1);
    $res = pow($bw,3)+pow($sw,3)+pow($gw,3);
    if($res == $n)
    {
        echo $n.'是水仙花数';
        return true;
    }
    else
    {
        echo $n.'不是水仙花数';
        return false;
    }
}
//print_r(flower(153));

function three($n)
{
    $len = strlen($n);
    $arr = array($n);
    for($i=0;$i<$len;$i++)
    {
        if($arr[0][$i])
        {
            $n++;
            if($n==3)
            {
                return $arr[0][$i];
            }
        }
    }
}
//print_r(three($n='acefefe'));

function hw($n)
{

}
//print_r(hw('abba'));

function fbnq($n)
{
    $num= range(1,$n);
    if(count($num)<2)
    {
        return $n;
    }
    for ($i=3;$i<$n;$i++)
    {
        if($num[$i]==$num[$i-1]+$num[$i-2])
        {
            return $num[$i];
        }
    }
}
//print_r(fbnq(13));

function sz($n)
{
    $arr=range('a','z');
    $len = count($arr);
    $list=[];
    for($i=1;$i<$n;$i++)
    {

    }

}
//print_r(sz(13));