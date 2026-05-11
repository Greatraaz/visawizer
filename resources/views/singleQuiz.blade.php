@extends('layouts.frontend')
@section('content') 
@include('partials.breadcrumb')

    <style>
        .quiz-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        .quiz-header {
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .quiz-header h1 {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }
        .progress-section {
            padding: 20px 30px;
            background: #f8f9fa;
        }
        .progress {
            height: 10px;
            border-radius: 10px;
            background: #e9ecef;
        }
        .progress-bar {
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            transition: width 0.4s ease;
        }
        .question-section {
            padding: 40px;
            min-height: 400px;
        }
        .question-number {
            color: #764ba2;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        .question-text {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .option {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 18px 20px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }
        .option:hover {
            border-color: var(--theme-color-3);
            background: #f0f4ff;
            transform: translateX(5px);
        }
        .option.selected {
            border-color: var(--theme-color-3);
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            font-weight: 600;
        }
        .option-label {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: white;
            border: 2px solid var(--theme-color-3);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: 600;
            color: var(--theme-color-3);
        }
        .option.selected .option-label {
            background: var(--theme-color-3);
            color: white;
        }
        .quiz-footer {
            padding: 20px 40px;
            background: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-custom {
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-next {
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            color: white;
        }
        .btn-next:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.4);
        }
        .btn-prev {
            background: white;
            color: var(--theme-color-3);
            border: 2px solid var(--theme-color-3);
        }
        .btn-prev:hover {
            background: var(--theme-color-3);
            color: white;
        }
        .result-section {
            display: none;
            padding: 40px;
            text-align: center;
        }
        .result-score {
            font-size: 4rem;
            font-weight: 700;
            background: linear-gradient(150deg, var(--theme-color-3) 15%, #28ae77 48.85%, var(--theme-color-3) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 20px 0;
        }
        .result-message {
            font-size: 1.5rem;
            color: #2d3748;
            margin-bottom: 30px;
        }
        .result-details {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
        }
        .result-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .result-row:last-child {
            border-bottom: none;
        }
        .emoji {
            font-size: 3rem;
            margin-bottom: 20px;
        }
    </style>

    <div class="quiz-container" style="margin: 80px auto;">
        <div class="quiz-header">
            <h1 class="text-white">{{ $category->name }}</h1>
            <p class="mb-0 mt-2">{{ $category->description }}</p>
        </div>
        
        <div class="progress-section">
            <div class="d-flex justify-content-between mb-2">
                <span class="text-muted" id="progress-text">Question 1 of {{ $quizCount }}</span>
                <span class="text-muted" id="progress-percent">0%</span>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" id="progress-bar" style="width: 0%"></div>
            </div>
        </div>

        <div class="question-section" id="quiz-section">
            <div class="question-number" id="question-number">Question 1</div>
            <div class="question-text" id="question-text"></div>
            <div id="options-container"></div>
        </div>

        <div class="result-section" id="result-section">
            <div class="emoji" id="result-emoji">🎉</div>
            <h2>Quiz Completed!</h2>
            <div class="result-score" id="final-score">0/10</div>
            <div class="result-message" id="result-message">Excellent Work!</div>
            <div class="result-details">
                <div class="result-row">
                    <span><strong>Total Questions:</strong></span>
                    <span id="total-questions">{{ $quizCount }}</span>
                </div>
                <div class="result-row">
                    <span><strong>Correct Answers:</strong></span>
                    <span class="text-success" id="correct-answers">0</span>
                </div>
                <div class="result-row">
                    <span><strong>Wrong Answers:</strong></span>
                    <span class="text-danger" id="wrong-answers">0</span>
                </div>
                <div class="result-row">
                    <span><strong>Score Percentage:</strong></span>
                    <span id="score-percentage">0%</span>
                </div>
            </div>
            <button class="btn btn-custom btn-next mt-4" onclick="restartQuiz()">
                <i class="fas fa-redo"></i> Restart Quiz
            </button>
        </div>

        <div class="quiz-footer" id="quiz-footer">
            <button class="btn btn-custom btn-prev" id="prev-btn" onclick="previousQuestion()" disabled>
                <i class="fas fa-arrow-left"></i> Previous
            </button>
            <button class="btn btn-custom btn-next" id="next-btn" onclick="nextQuestion()">
                Next <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <div class="modal fade" id="collabPopup" tabindex="-1">
      <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg">

          <div class="modal-body p-0">
            <div class="row g-0">

              <!-- RIGHT SECTION -->
              <div class="col-lg-12 p-4" style="background-image: url({{ asset('assets/images/img-bg.webp')  }});    background-color: #F0EEFF;">
                <p class="consent">Your data is completely safe with us. We respect your privacy and will never misuse or share your information with anyone.</p>
                <form id="quizForm">
                  @csrf
                  <div class="row g-3">
                    <div class="col-12">
                      <input type="text" name="name" class="form-control form-control-lg rounded-3" placeholder="Full Name *" required>
                    </div>

                    <div class="col-12">
                      <input type="email" name="email" class="form-control form-control-lg rounded-3" placeholder="Email Address *" required>
                    </div>

                    <div class="col-12">
                      <input type="tel" name="phone" class="form-control form-control-lg rounded-3" placeholder="Phone Number *" required>
                    </div>

                    <div class="col-12">
                        <textarea name="message" class="form-control-lg w-100" placeholder="Enter your message/comment" style="height: 90px;    border: none;"></textarea>
                    </div>
                    <div class="d-flex gap-2 mt-1 mb-1">
                        <input type="checkbox"> 
                        <h6 class="mb-0">I want to receive newsletter updates.</h6>
                    </div>
                    <input type="text" name="bot_field" class="d-none">
                    <input type="hidden" name="course" value="{{ $category->name }}">
                    <input type="hidden" name="formName" value="Quiz">
                    <div class="col-12 mt-2">
                      <button id="submitBtn" type="Submit" class="btn btn-primary btn-lg w-100 rounded-3" style="background:var(--theme-color-3); border:none;">
                        <span class="btext">Show Quiz Result</span>
                      </button>
                    </div>
                  </div>

                </form>
              </div>

            </div>
          </div>

          <button type="button" class="btn-close position-absolute end-0 m-1" data-bs-dismiss="modal"></button>

        </div>
      </div>
    </div>

@endsection 
@push('script')
    <script>
        const quizData = @json($quizData);

        let currentQuestion = 0;
        let userAnswers = {};

        $(document).ready(function() {
            loadQuestion();
        });

        function loadQuestion() {
            const q = quizData[currentQuestion];
            
            $('#question-number').text(`Question ${currentQuestion + 1}`);
            $('#question-text').text(q.question);
            $('#progress-text').text(`Question ${currentQuestion + 1} of ${quizData.length}`);
            
            const progress = ((currentQuestion) / quizData.length) * 100;
            $('#progress-bar').css('width', progress + '%');
            $('#progress-percent').text(Math.round(progress) + '%');
            
            let optionsHtml = '';
            const labels = ['A', 'B', 'C', 'D'];
            q.options.forEach((option, index) => {
                const isSelected = userAnswers[currentQuestion] === index ? 'selected' : '';
                optionsHtml += `
                    <div class="option ${isSelected}" onclick="selectOption(${index})">
                        <div class="option-label">${labels[index]}</div>
                        <div>${option}</div>
                    </div>
                `;
            });
            $('#options-container').html(optionsHtml);
            
            $('#prev-btn').prop('disabled', currentQuestion === 0);
            
            if (currentQuestion === quizData.length - 1) {
                /*$('#next-btn').html('<i class="fas fa-check"></i> Submit').off('click').on('click', submitQuiz);*/
                $('#next-btn').html('<i class="fas fa-check"></i> Submit').off('click').on('click', function () {
                    $('#collabPopup').modal('show');
                });
            } else {
                $('#next-btn').html('Next <i class="fas fa-arrow-right"></i>').off('click').on('click', nextQuestion);
            }
        }

        function selectOption(index) {
            userAnswers[currentQuestion] = index;
            $('.option').removeClass('selected');
            $('.option').eq(index).addClass('selected');
        }

        function nextQuestion() {
            if (currentQuestion < quizData.length - 1) {
                currentQuestion++;
                loadQuestion();
            }
        }

        function previousQuestion() {
            if (currentQuestion > 0) {
                currentQuestion--;
                loadQuestion();
            }
        }

        $('#quizForm').on('submit', function (e) {
            e.preventDefault(); 
            var form = $(this);
            var button = $('#submitBtn');
            form.find('.text-danger').remove();
            form.find('.is-invalid').removeClass('is-invalid');

            $.ajax({
                url: "{{ url('contact-form') }}",
                type: "POST",
                data: form.serialize(),
                dataType: "json",

                beforeSend: function(){
                    button.text("Submitting").prop('disabled', true);
                },

                success: function(res){
                    if(res.status === 'success'){
                        $('#collabPopup').modal('hide'); 
                        form[0].reset();
                        submitQuiz(); 
                    } else {
                        toastr.error(res.message || "Submission failed");
                        button.text("Submit").prop('disabled', false);
                    }
                },

                error: function(xhr){
                    button.text("Submit").prop('disabled', false);

                    if(xhr.status === 422){
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(field, message){
                            var input = form.find('[name="'+field+'"]');
                            input.addClass('is-invalid');
                            input.after('<small class="text-danger">'+message+'</small>');
                        });
                    } else {
                        toastr.error("Something went wrong!");
                    }
                }
            });
        });


        function submitQuiz() {
            let correct = 0;
            let wrong = 0;
            
            quizData.forEach((q, index) => {
                if (userAnswers[index] === q.correct) {
                    correct++;
                } else if (userAnswers[index] !== undefined) {
                    wrong++;
                }
            });
            
            const unanswered = quizData.length - correct - wrong;
            const percentage = Math.round((correct / quizData.length) * 100);
            
            $('#quiz-section').hide();
            $('#quiz-footer').hide();
            $('#result-section').show();
            
            $('#final-score').text(`${correct}/${quizData.length}`);
            $('#total-questions').text(quizData.length);
            $('#correct-answers').text(correct);
            $('#wrong-answers').text(wrong);
            $('#score-percentage').text(percentage + '%');
            
            const progress = 100;
            $('#progress-bar').css('width', progress + '%');
            $('#progress-percent').text(progress + '%');
            $('#progress-text').text(`Completed`);
            
            if (percentage >= 80) {
                $('#result-emoji').text('🎉');
                $('#result-message').text('Outstanding Performance!');
            } else if (percentage >= 60) {
                $('#result-emoji').text('😊');
                $('#result-message').text('Great Job!');
            } else if (percentage >= 40) {
                $('#result-emoji').text('👍');
                $('#result-message').text('Good Effort!');
            } else {
                $('#result-emoji').text('📚');
                $('#result-message').text('Keep Learning!');
            }
        }

        function restartQuiz() {
            currentQuestion = 0;
            userAnswers = {};
            $('#result-section').hide();
            $('#quiz-section').show();
            $('#quiz-footer').show();
            loadQuestion();
        }
    </script>

@endpush