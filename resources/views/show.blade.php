<table class="table table-bordered">
        <tr>
            
            <th>title</th>
            <th>blogs</th>
            <th width="280px " colspan="2">Action</th>
        </tr>
		@foreach ($blog as $blogs) 
        <tr>
		
            <td> {{$blogs->title}} </td>
            
            <td>  {{$blogs->blogs}} </td>

			<td><a href="{{URL::to('showbyid/' . $blogs->id)
                }}">Show</a> | 

				
                <a href="{{URL::to('blogedit/'. $blogs->id)}}">Edit</a> |


              


                <form method="post" action="">

                    <input type="hidden" name="_token" value="
                        {!!csrf_token() !!}">


                    <div class="form-group">
                        <div>
                            <button type="submit" class=
                                "btn btn-warning">Delete</button>
                        </div>
                    </div>
                </form>
            </td>

        </tr>
		@endforeach
    </table>



