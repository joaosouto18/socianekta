<div class="sidebar" id="sidebar">

    <div class="info">
        <div class="nome">


        </div>
    </div>

    <table class="table table-ordered table-sidebar">
        <tbody>

            <tr>
                <td class="td-sidebar"><a href=""><i class="fas fa-home"></i>   Dashboard</a></td>
            </tr>




        </tbody>
    </table>
</div>


@section('javascript1')

<script type="text/javascript">

    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
            content.style.maxHeight = null;
            } else {
            content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }

</script>

@endsection
