<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Seminars;
use App\Models\Courses;
use App\Support\StudyTopicData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index()
    {
        $banners = \DB::table('banners')->where('status', 1)->orderBy('orderNo', 'asc')->get();
        return view('index', compact('banners'));
    }

    public function studyInAustralia()
    {
        return view('study');
    }

    public function studyTopic($slug)
    {
        return $this->renderStudyTopic($slug);
    }

    public function studyVisaTopic($slug)
    {
        return $this->renderStudyTopic('visa/' . $slug);
    }

    private function renderStudyTopic(string $slug)
    {
        $page = StudyTopicData::get($slug);

        if (!$page) {
            abort(404);
        }

        $countries = StudyTopicData::countries();

        return view('studyTopic', compact('page', 'countries'));
    }

    public function singleCourse(Request $request, $slug)
    {
        $course = Courses::where('slug', $slug)->firstOrFail();
        return view('singleCourse', compact('course'));
    }

    public function courses()
    {
        $courses = Courses::orderBy('id', 'desc')->get();
        return view('courses', compact('courses'));
    }

    public function framework()
    {
        return view('framework');
    }

    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }
    
    public function returnRefund()
    {
        return view('returnRefund');
    }
    public function termsConditions()
    {
        return view('termsConditions');
    }

    public function quiz()
    {
        $category = \DB::table('quizcategory')->orderBy('id', 'desc')->get();
        return view('quiz', compact('category'));
    }

    public function singleQuiz($slug)
    {
        $category = DB::table('quizcategory')->where('slug', $slug)->first();
        if (!$category) { abort(404); }
        $quiz = \DB::table('quiz')->where('categoryId', $category->id)->get();
        $quizData = $quiz->map(function ($q) {
            $options = [
                $q->option1,
                $q->option2,
                $q->option3,
                $q->option4,
            ];

            return [
                'question' => $q->question,
                'options'  => $options,
                'correct'  => array_search($q->answer, $options),
            ];
        });
        $quizCount = $quiz->count();
        return view('singleQuiz', compact('category', 'quizData', 'quizCount'));
    }

    public function services()
    {
        return view('services');
    }

    public function featuredTrending()
    {
        return view('featuredTrending');
    }

    public function advisoryConsulting() {
    return view('services.advisoryConsulting');
    }

    public function trainingWorkshops() {
        return view('services.trainingWorkshops');
    }

    public function certificationPrograms() {
        return view('services.certificationPrograms');
    }

    public function measureMaintain() {
        return view('services.measureMaintain');
    }

    public function centresAccreditation() {
        return view('services.centresAccreditation');
    }

    public function coachingMentoring() {
        return view('services.coachingMentoring');
    }



    public function ppi()
    {
        return view('podcasts');
    }

    public function recommendedBooks()
    {
        return view('recommendedBooks');
    }

    public function toolsFrameworks()
    {
        return view('toolsFrameworks');
    }

    public function reportsNewsletters()
    {
        return view('reportsNewsletters');
    }

    public function whoWeAre()
    {
        return view('whoWeAre');
    }

    public function globalEvents()
    {
        $seminars = Seminars::where('type', 'Event')->orderBy('id', 'desc')->get();
        return view('globalEvents', compact('seminars'));
    }

    public function seminars()
    {
        $seminars = Seminars::where('type', 'Seminar')->orderBy('id', 'desc')->get();
        return view('globalEvents', compact('seminars'));
    }

    public function webinars()
    {
        $seminars = Seminars::where('type', 'Webinar')->orderBy('id', 'desc')->get();
        return view('globalEvents', compact('seminars'));
    }

    public function eventSingle(Request $request, $slug)
    {
        $event = Seminars::where('slug', $slug)->firstOrFail();
        return view('eventSingle', compact('event'));
    }

    public function caseStudies()
    {
        return view('caseStudies');
    }

    public function whatWeDo()
    {
        return view('whatWeDo');
    }

    public function missionVision()
    {
        return view('missionVision');
    }

    public function advisoryBoard()
    {
        return view('advisoryBoard');
    }

    public function facilitators()
    {
        $team = DB::table('facilitators')->where('status', 1)->orderBy('id', 'asc')->get();
        return view('facilitators', compact('team'));
    }

    public function collaborations()
    {
        return view('collaborations');
    }

    
    public function aboutus()
    {
        $team = DB::table('facilitators')->where('status', 1)->orderBy('id', 'asc')->get();
        return view('aboutUs', compact('team'));
    }

    public function ethicalLeadership()
    {
        return view('ethicalLeadership');
    }

    public function ethicalCulture()
    {
        return view('ethicalCulture');
    }

    public function businessSociety()
    {
        return view('knowledge-hub.businessSociety');
    }

    public function individualBusinessEthics()
    {
        return view('knowledge-hub.individualBusinessEthics');
    }

    public function corporateSocialResponsibility()
    {
        return view('knowledge-hub.corporateSocialResponsibility');
    }

    public function ethicalTheories()
    {
        return view('knowledge-hub.ethicalTheories');
    }

    public function stakeholderManagement()
    {
        return view('knowledge-hub.stakeholderManagement');
    }

    public function sustainabilityEsg()
    {
        return view('knowledge-hub.sustainabilityEsg');
    }

    public function givingVoiceToValues()
    {
        return view('knowledge-hub.givingVoiceToValues');
    }

    public function finance()
    {
        return view('areas.finance');
    }

    public function mediaJournalism()
    {
        return view('areas.mediaJournalism');
    }

    public function researchPublications()
    {
        return view('areas.researchPublications');
    }

    public function workplaceBusiness()
    {
        return view('areas.workplaceBusiness');
    }

    public function aiTechnology()
    {
        return view('areas.aiTechnology');
    }

    public function environment()
    {
        return view('areas.environment');
    }

    public function marketingSales()
    {
        return view('areas.marketingSales');
    }

    public function corporateGovernance()
    {
        return view('areas.corporateGovernance');
    }

    public function supplyChain()
    {
        return view('areas.supplyChain');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function centreForBusinessSociety()
    {
        return view('cbs');
    }

    public function cmpd()
    {
        return view('cmpd');
    }

    public function glossary()
    {
        return view('glossary');
    }
    

    public function blogs(Request $request)
    {
        $title = 'Visawizer';
        $description = 'Visawizer';
        $keywords = 'Visawizer';

        $page = $request->get('page', 1);
        $perPage = 12;
        $categoryId = 2;
        $response = Http::get("https://visawizer.com.au/wp-json/wp/v2/posts?_embed&per_page={$perPage}&page={$page}&categories={$categoryId}");

        if ($response->successful()) {
            $posts = $response->json();
            $total = $response->header('X-WP-Total');
            $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
                $posts,
                $total,
                $perPage,
                $page,
                ['path' => url('blogs')]
            );
            return view('blogs', compact('paginator', 'posts', 'title', 'description', 'keywords'));
        } else {
            abort(404, 'Unable to fetch blogs.');
        }
    }

    public function blogsByCategory(Request $request, $slug)
    {
        $title = 'Visawizer';
        $description = 'Visawizer';
        $keywords = 'Visawizer';

        $categories = Http::get('https://visawizer.com.au/wp-json/wp/v2/categories')->json();
        $catId = collect($categories)->firstWhere('slug', $slug)['id'] ?? null;
        if (!$catId)
            abort(404);

        $page = $request->get('page', 1);
        $perPage = 12;
        $response = Http::get("https://visawizer.com.au/wp-json/wp/v2/posts?categories={$catId}&_embed&per_page={$perPage}&page={$page}");
        
        if ($response->successful()) {
            $posts = collect($response->json());
            $total = (int) $response->header('X-WP-Total');

            $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
                $posts,
                $total,
                $perPage,
                $page,
                [
                    'path' => $request->url(),
                    'query' => $request->query(),
                ]
            );
            
            return view('blogs', compact('paginator', 'posts', 'title', 'description', 'keywords'));
        } else {
            abort(404, 'Unable to fetch blogs.');
        }
    }

    public function blogSingle($slug)
    {
        $title = 'Visawizer';
        $description = 'Visawizer';
        $keywords = 'Visawizer';
        $res = Http::get("https://visawizer.com.au/wp-json/wp/v2/posts?slug=$slug&_embed");
        $post = $res->successful() ? $res->json()[0] : abort(404);
        return view('blogSingle', compact('post', 'title', 'description', 'keywords'));
    }

}
