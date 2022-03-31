<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="page d-flex flex-row flex-column-fluid">
		
		<?php $this->load->view('_partials/sidemenu'); ?>

		<!--begin::Wrapper-->
		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			
			<?php $this->load->view('_partials/navbar'); ?>

			<!--begin::Content-->
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					
				<?php $this->load->view('_partials/breadcrumb'); ?>

				<!--begin::Post-->
				<div class="post d-flex flex-column-fluid" id="kt_post">
					<!--begin::Container-->
					<div id="kt_content_container" class="container-xxl">
						<?php $this->load->view($inner_view); ?>
					</div>
					<!--end::Container-->
				</div>
				<!--end::Post-->

			</div>
			<!--end::Content-->

			<?php $this->load->view('metronic/_partials/footer'); ?>
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Root-->