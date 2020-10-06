  <style>
.border{
	border:1px solid black;
	border-radius:10px;
	overflow:visible;
 	margin:50px 0;}
.border p{
	font-weight:500 !important;
	padding-bottom:0 !important;
	padding-top:10px;}
#check{
	border-radius:5px;
	width:300px;
	height:200px;
	overflow:hidden;}	
.feeder a{
	color:black;
	font-weight:400;}
.border .row:last-child{
	display:none;}
.feeder img{
	height:100%;
	width:100%;}
.feeder h6{
	position:relative;
	bottom:0;}
.feeder .col-12{
	transition:0.4s;}

@media(max-width:576px){
.feeder .col-12{
	border-bottom:1px solid #c0c0c0;
	margin-top:10px;}
}

@media(min-width:577px){
.feeder .col-12:hover{
	transform:scale(1.2);
	background:#c0c0c0;
	box-shadow:2px 2px 2px black;
	z-index:2;}
}

  </style>








<div class="container border">
	<p>More from BleedBlue</p><hr>
	<div class="row feeder">
		<div class="col-12 col-sm-3 ">
			<div  id="check">
			<img src="../post/pak-beg.jfif" alt="Pak">
			</div>
			<div id="caption">
			<a href="../posts/pak-kashmir-obsession.php">Pakistan's Kashmir Obsession and Saudi's Snub to Pak</a><br>
			<h6>Aug 24, 20</h6>
			</div>
		</div>
		<div class="col-12 col-sm-3 offset-sm-1">
			<div  id="check">
			<img src="../post/bose.jfif" alt="bose">
			</div>
			<div id="caption">
			<a href="../posts/netaji-the-leader.php">Netaji Subhash Chandra Bose </a><br>
			<h6>Aug 18, 20</h6>
			</div>
		</div>
		<div class="col-12 col-sm-3 offset-sm-1">
			<div id="check">
			<img src="../post/ram.jfif" alt="rama">
			</div>
			<div id="caption">
			<a href="../posts/ram-mandir.php">Ram Mandir- The conundrum of a century</a><br>
			<h6>Aug 15, 20</h6>
			</div>
		</div>
		
	</div>
	<div class="row feeder">
		<div class="col-12 col-sm-3">
			<div id="check">
			<img src="../post/beirut.jpeg" alt="beirut">
			</div>
			<div id="caption">
			<a href="../posts/beirut-blasts.php">Beirut Blasts- Explosions that boomed the world over</a><br>
			<h6>Aug 07, 20</h6>
			</div>
		</div>
		
		<div class="col-12 col-sm-3 offset-sm-1">
			<div id="check">
			<img src="../post/ab2.jpeg" alt="Dr. Kalam">
			</div>
			<div id="caption">
			<a href="../posts/dr-kalam.php">Dr. APJ Abdul Kalam</a><br>
			<h6>Jul 27, 20</h6>
			</div>
		</div>
		<div class="col-12 col-sm-3 offset-sm-1">
			<div id="check">
			<img src="../post/hambantota.jpeg" alt="China-Iran">
			</div>
			<div id="caption">
			<a href="../posts/china-iran-deal.php">The $400 Billion that even dwarfed the CPEC</a><br>
			<h6>Jul 23, 20</h6>
			</div>
		</div>
	</div>
 </div>



<script>
var a=0;
var r=0;
var width= screen.width;
if(width>576)
{r=5000;}
else
{r=10000;}

feeder();

function feeder(){
var c;
var x=document.getElementsByClassName("feeder");
for(c=0;c<x.length;c++){
x[c].style.display="none";}

a++;
if(a>x.length){
a=1;}

x[a-1].style.display="flex";
setTimeout(feeder,r);
}

</script>