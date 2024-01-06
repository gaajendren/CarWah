<div class="modal fade" id="exampleModal{{ $val->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down">
        <div class="modal-content bg-dark text-white">
            <!-- Add your modal content here -->
            <div class="modal-header">
                <span><h5 class="modal-title text-white" id="exampleModalLabel">{{$val->name}} </h5><p class="mb-0 pb-0">RM {{$val->price}}</p></span>
                <button type="button" class="btn btn-dark btn-shadow-none btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark fa-s"></i></button>
            </div>
            <div class="modal-body">
            <label for="">Product Details</label>
            <p style="text-indent:-8px;"> {{$val->description}}</p>

                <label for="">Service Provided</label>
                <ul>
                    @php
                    $details = [];                                     
                    $details = explode("/n" ,$val->service)                                    
                    @endphp

                    @foreach ($details as $v)
                    <div class="row">
                        <div class="col-1 p-0">
                        <li><i  class="far fa-check-circle"></i></li>
                        </div>
                        <div class="col-11 p-0">
                            <p style="text-indent: 0px; ">{{$v}}</p>
                        </div>
                    </div>
                    
                    @endforeach   
                </ul>

                <hr class="bg-white">
                <h5 class="text-white">Comments</h5>
                <hr class="bg-white">
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="comments-list">
                                @php 
                                 $fileterd = $data1->where('product_id', $val->id)->sortByDesc('created_at');
                                @endphp
                                @foreach ($fileterd as $review)
                               
                                @php
                                    $starCount = (int) $review->rate;
                                @endphp
                               
                                <div class="media mb-3 p-3 border shadow">
                                        <div class="media-body">            
                                        <h4 class="media-heading user_name text-white">{{$review->users->name}}</h4>
                                        <span>
                                        <p class="pull-right"><small class="mr-5">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</small>
                                        @for ($i = 0; $i < $starCount; $i++)
                                            <i class="fa-solid fa-star fa-xs"></i>
                                        @endfor 
                                        @for ($i = (5 - $starCount); $i > 0; $i--)
                                            <i style="display:inline-block;" class="fa-regular fa-star fa-xs"></i>
                                        @endfor
                                    </p>
                                        </span>
                                        {{$review->comment}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>                           
                            </div>
                        </div>
                    </div>

        <!-- end -->
            </div>
         

            <div class="modal-footer"> 
            
                <button type="button" class='btn btn-secondary' data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>