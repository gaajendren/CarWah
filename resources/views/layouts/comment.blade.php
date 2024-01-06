
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark text-white">
                            <div class="modal-header">
                                <h3 class="modal-title text-white fs-5" id="exampleModalLabel">Comment</h3>
                                <button type="button" class="btn btn-dark btn-shadow-none btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark fa-xs"></i></button>
                            </div>
                            <form action="{{url('/comment/'. $val->product_id .'/' . $val->id)}}" method="post">
                            {!! csrf_field() !!}
                            <div class="modal-body">
                                <div class="mb-3">
                                <div><label for="message-text" class="col-form-label">Rating:</label></div>
                                    <div class="rating"> <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label> </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" name="comment" id="message-text"></textarea>
                                </div>                 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>