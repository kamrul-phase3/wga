<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom mb-8">
            <div class="card-body">
                <div class="bia-analysis-btn text-center">
                    <a href="{{  route('bia.assessment', ['bia' => $biaId, 'department' => $departmentId, 'section' => 1]) }}" class="btn btn-success btn-lg">
                        <span class="label label-md label-white mr-2">1</span>
                        Department Questionnaire
                    </a>
                    <a href="{{  route('bia.assessment', ['bia' => $biaId, 'department' => $departmentId, 'section' => 2]) }}" class="btn btn-primary btn-lg">
                        <span class="label label-md label-white mr-2">2</span>
                        Service/Process Evaluation
                    </a>
                    <a href="{{  route('bia.assessment', ['bia' => $biaId, 'department' => $departmentId, 'section' => 3]) }}" class="btn btn-warning btn-lg">
                        <span class="label label-md label-white mr-2">3</span>
                        Continuity Plan
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>