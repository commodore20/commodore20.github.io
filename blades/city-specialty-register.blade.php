        <div class="container">
			<div class="row justify-content-around py-4">
            {!! Form::open(['url' => 'foo/bar', 'class' => 'form-contain']) !!}
				<div class="col-md-5 border rounded shadow-sm">
					<div class="form-group">
                    {{ Form::label('address', 'Full Address:') }} 
					{{ Form::text('address', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Street, City/Municipality, Province']) }}
					</div>
					<div class="form-group">
                    {{ Form::label('zip-code', 'Zip Code:') }} 
					{{ Form::text('zip-code', $value = null, ['class' => 'form-control text-box single-line', 'pattern' => '\d*', 'maxlength'=>'4', 'placeholder' => '']) }}
					</div>
					<!--Modal Anchor-->
					<a href="" data-toggle="modal" data-target="#exampleModalCenter"
						>Zip Code Guide</a
					>

					<!-- Modal -->
					<div
						class="modal fade"
						id="exampleModalCenter"
						tabindex="-1"
						role="dialog"
						aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true"
					>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">
										DavSur Zip Code Guide
                                    </h5>
								</div>
								<div class="modal-body">
									<img src="images/zip-code.jpg" alt="" />
								</div>
								<div class="modal-footer">
                                {{ Form::button('Close'['class' => 'btn btn-secondary close', 'type' => 'button', 'data-dismiss' => 'modal', 'aria-label' => 'close'] ) }}
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
                    {{ Form::button('Submit'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
					{{ Form::button('Cancel'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
					</div>
				</div>
				<div class="col-md-5 border rounded shadow-sm">
					<div class="form-group pt-5">
                    {{ Form::label('specialty', 'Specialty:') }} 
					{{ Form::text('specialty', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Specialty']) }}
					</div>
					<div class="text-center">
                    {{ Form::button('Submit'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
					{{ Form::button('Cancel'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
					</div>
                </div>
            {!! Form::close()!! }
			</div>
		</div>