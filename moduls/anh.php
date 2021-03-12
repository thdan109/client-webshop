<style>
#searchbox {
    width: 400px;
}
#searchbox input {
    outline: none;
}
input:focus::-webkit-input-placeholder {
    color: transparent;
}
input:focus:-moz-placeholder {
    color: transparent;
}
input:focus::-moz-placeholder {
    color: transparent;
}
#searchbox input[type="text"] {
    background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png) no-repeat 10px 13px #f2f2f2;
border: 2px solid #f2f2f2;
    font: bold 12px Arial,Helvetica,Sans-serif;
    color: #6A6F75;
    width: 160px;
    padding: 14px 17px 12px 30px;
    -webkit-border-radius: 5px 0px 0px 5px;
    -moz-border-radius: 5px 0px 0px 5px;
    border-radius: 5px 0px 0px 5px;
    text-shadow: 0 2px 3px #fff;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
}
#searchbox input[type="text"]:focus {
background: #f7f7f7;
border: 2px solid #f7f7f7;
width: 200px;
padding-left: 10px;
}

#button-submit{
background: url(http://4.bp.blogspot.com/-slkXXLUcxqg/VEQI-sJKfZI/AAAAAAAAAlA/9UtEyStfDHw/s1600/slider-arrow-right.png) no-repeat;
margin-left: -40px;
border-width: 0px;
width: 43px;
height: 45px;
}
</style>

<form id="searchbox" method="get" action="/search" autocomplete="off">
<input name="q" type="text" size="15" placeholder="Enter keywords here..." />
<input id="button-submit" type="submit" value=" "/>
</form>