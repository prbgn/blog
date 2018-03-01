<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'It\'s official: Android is out of ideas',
                'slug' => 'its-official-android-is-out-of-ideas',
                'brief' => 'We\'re barely two months into 2018, and one thing\'s already very clear: Most new Android phone released this year will be iPhone X knockoffs.',
                'content' => 'Looking at the crop of news phones, Android manufacturers aren\'t even trying to make devices that look different from Apple\'s $1,000 flagship. Some are are even treating the iPhone X as the only benchmark that matters, boasting about how much better their Android-powered iPhone lookalikes are than the real deal.

I\'m sure Apple is simultaneously flattered and annoyed by all the copying, but from where I\'m standing it\'s just embarrassing for Android because that side of the mobile camp has run out of fresh ideas.

I noticed this unfortunate trend while at Mobile World Congress this past week. After a decade of Android phone makers collectively going out of their way to design devices that are distinctly different from the iPhone, most of them seem to have tossed in the towel and and given in to making iPhone X clones.

Most of the copies were from obscure brands you\'ve probably never heard of, like Noa, Doogee, or Leagoo. Noa unveiled their N10 (pictured at top) and Doogee announced its V (below). Both devices look like the iPhone X at first glance, but upon closer inspection you can see there\'s not much beyond that.

Cloning the iPhone is not unusual, especially when it\'s from an unknown Asian brand. There are so many fakes released before and after a new iPhone\'s launch that they\'re not even worth writing about anymore, even if they\'re exquisitely-made clones.

What is unusual is an established tech company coming out and shamelessly boasting about how it made an iPhone X clone that runs Android.

Such was the case when Asus announced its ZenFone 5. Just see if you can even spot the difference in the photo below. Which one is the iPhone X and which one is the ZenFone 5?

Not sure? OK, I\'ll tell you. The left is the ZenFone 5 and the right is the iPhone X. Asus was incredibly proud to brag that that the ZenFone 5\'s notch is 26 percent smaller than "Fruit Phone X" (I can\'t even).

But unless you\'re a phone nerd like I am, how are you going to know the ZenFone 5 has a smaller notch? And do you even care? I doubt anyone\'s obsessed with having a smaller notch. If that was the case, the Essential Phone, which has the smallest notch of any major smartphone, should have been way more popular than it was.

Flip the ZenPhone 5 over and the backside is another copy of the iPhone X. Look at how the dual cameras are oriented vertically. You\'d think Asus would at least make the iPhone X\'s least attractive details like the huge camera bump less of an eyesore, but nah, they just copied it, compromises and all.',
                'created_at' => '2018-03-01 20:05:22',
                'updated_at' => '2018-03-01 20:42:50',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Otter app transcribes conversations like it\'s no big deal',
                'slug' => 'otter-app-transcribes-conversations-like-its-no-big-deal',
                'brief' => 'Every product here is independently selected by Mashable journalists. If you buy something featured, we may earn an affiliate commission which helps support our work',
                'content' => 'Anyone who\'s ever transcribed an audio interview into text knows what a painfully slow process that is. But with the new Otter app, created by a company called AI Sense, this could become a thing of the past, even when transcribing a complex conversation with several people speaking.

The app, which I tried out at Mobile World Congress in Barcelona, is simple to use: Start it up, and it\'ll start turning the conversation around it into text. After a quick setup process, it knows when you are speaking, and it can distinguish between different voices in the conversation. You can also search it for certain terms that were mentioned in the conversation.

Otter uses AI smarts for automatic speech recognition, speaker separation and identification as well as deep content search — features not commonly seen on similar software solutions. And it actually does its job quite well in a reasonably quiet room — errors are there, obviously, but having an automated transcript right after you\'re done with an interview is very useful for journalists (you also get the audio recording of the conversation, don\'t worry).

In the extremely busy environment of Mobile World Congress, however, Otter\'s transcript was nowhere near the quality level that would make it usable — especially when recording my voice (it did better with the voices it was trained for). This is unsurprising: With dozens of people talking around you and a voice coming out of the speakerphone drowning out your conversation, I don\'t think any transcription engine would do a very job. In other words: Do not expect wonders in a noisy environment. 

The app is free, but a paid version is currently not a priority and is expected in the second half of this year. "We want to encourage usage. We want to get a lot of users (...) We want to grow a healthy user base. (They) give us a lot of feedback, give us a lot of good training data so that we can improve our product and the end user experience," Simon Lau, head of product at AI Sense, told me. 

In case you were wondering, I didn\'t write those sentences down; they come directly from Otter which was recording our conversation in the chaos of a hallway of Fira Gran Via, the Barcelona venue where Mobile World Congress is held. Check out that entire part of the conversation in the image, below. 

Otter isn\'t just for journalists, though. Sam Liang, the CEO and co-founder of AI Sense, sees numerous potential uses, both for businesses and individuals. This includes recording meetings, teleconferencing sessions, sales calls and the like.

An obvious concern is privacy. Lau claims all the data is stored and moved around securely, with no one except the owner having access to it. As for potential abuse — such as eavesdropping on your employees, for example — Lau says the company will make efforts to educate its users on acceptable and unacceptable use. 

Otter is available for free on Apple\'s App Store as well as Google Play.',
                'created_at' => '2018-03-01 20:07:03',
                'updated_at' => '2018-03-01 20:07:03',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'The ice on Lake Michigan has turned blue. Here\'s why.',
                'slug' => 'the-ice-on-lake-michigan-has-turned-blue-heres-why',
                'brief' => 'The ice on portions of Michigan\'s Great Lakes has turned blue, but don\'t worry, there\'s a perfectly good reason why.',
                'content' => 'The phenomenon is common on glaciers, but not so much on large swathes of lake ice. It\'s happening where Lake Michigan meets Lake Huron, at a place called the Straits of Mackinac. There, fat slabs and mounds of cracked blue ice have collected near the shorelines.

Local photographer Tori Burley captured the image above. 

The ice, however, is not actually turning blue. The color is a result of the way sunlight is bouncing off this particular ice, explained Ted Scambos, a research scientist at the National Snow and Ice Data Center, in an interview. 

Sometimes, weather conditions — such as a lack of high winds — allow water to freeze slowly and evenly, resulting in ice composed of large crystals (unlike snow, which is formed quickly and made up of small crystals). 

When light hits these big ice crystals, it can travel deep into the structures (compare this to snow, wherein light hits a sharp edge and reflects off of it right away, resulting in blinding white). When the light travels deeper into slowly formed ice, some of the red wavelengths of sunlight — which is the longest wavelength of visible light — get absorbed into the ice structure. 

The blue, which is the shortest wavelength of visible light, bounces back out, meet our eyes, and results in a deep aqua color.  

But this isn\'t the complete story. Blue ice is also composed of relatively pure, untainted water, which allows the blue reflection to be so vivid and dominant.

"It\'s a tribute to how clean the upper surface of Lake Michigan is," said Scambos, adding, "At least somewhere in Lake Michigan."',
                'created_at' => '2018-03-01 20:09:30',
                'updated_at' => '2018-03-01 20:09:30',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'One woman\'s quest to find the right meditation app in a messed-up world',
                'slug' => 'one-womans-quest-to-find-the-right-meditation-app-in-a-messed-up-world',
                'brief' => 'My iPhone, normally the quotidian keeper of grocery lists and Fitbit stats, has lately begun to feel like a sprawling self-help library.',
                'content' => 'The transformation began a few weeks ago, when I decided to test several meditation and mindfulness apps in order to share with you, dear reader, tips and insights from my experiment.

At first I felt giddy. I\'d downloaded seven different apps that promised, in one way or another, to bring me closer to my best self. I was just days into 2018 and suddenly had access to dozens of meditation sessions that spanned the self-improvement spectrum. Feeling distracted? Here, try this 10-session course on productivity. Not sleeping well? You definitely need to unwind with a guided body scan. Suffering from burnout? There’s a meditation (or 100) for you.

Even though I don’t make New Year\'s resolutions, the promise of using an app to clear a new path to spiritual and psychological enlightenment felt like as fresh a start as any. So I began exploring the apps Calm, Headspace, 10% Happier, Simple Habit, LARKR, Pacifica, and Shine with the hope that one of them could do what my IRL meditation classes hadn\'t yet done: turn me into someone who makes time, every day, to quiet my mind.

Alas, like many people hoping to develop a new habit via the convenience of an app, I came away from my experiment still searching for answers. I felt overwhelmed by the number of choices I could make in a single sitting. Sessions often revisited the same skills I learned in past real-life classes — let thoughts come and go, "return to the breath" — which made me wonder what exactly I was paying for. And I could feel a twinge of cynicism every time a session wandered perilously close to the line between meditation and self-help. After a week or so, I started ignoring reminders to meditate and instead watched episodes of The Great British Bake Off on Netflix.

Of course, plenty of people have downloaded one of these apps, or others like them, and had the opposite reaction. They\'ve found daily reminders and gamified tracking all the motivation they need to stick to their new habit. But I suspect countless others have faced obstacles similar to mine and those hurdles are important, regardless of whether or not a meditation app works for you.',
                'created_at' => '2018-03-01 20:10:58',
                'updated_at' => '2018-03-01 20:10:58',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'EU to tech companies: you have one hour to remove terrorist content',
                'slug' => 'eu-to-tech-companies-you-have-one-hour-to-remove-terrorist-content',
                'brief' => 'When it comes to dangerous content online, the European Union is not messing around.',
                'content' => 'Per a new set of guidelines announced by the European Union on Thursday, tech companies including Google, Facebook, and Twitter will have just one hour to remove "terror" content that\'s been flagged by EU authorities as illegal. 

According to the Wall Street Journal, the guidelines are actually a pre-emptive response to rattling from some European nations to make technology companies legally liable for illegal content that appears on their platforms.

The commission defines the content that companies have an obligation to speedily scrub as "all forms of illegal content ranging from terrorist content, incitement to hatred and violence, child sexual abuse material, counterfeit products and copyright infringement."

They also state that the first hour in which a piece of this illegal content is up is the time in which it does the most damage. The one-hour guideline is designed to mitigate its spreading.

"Online platforms are becoming people\'s main gateway to information, so they have a responsibility to provide a secure environment for their users. What is illegal offline is also illegal online," Vice-President for the Digital Single Market Andrus Ansip said in the EU\'s statement. "While several platforms have been removing more illegal content than ever before – showing that self-regulation can work – we still need to react faster against terrorist propaganda and other illegal content which is a serious threat to our citizens\' security, safety and fundamental rights."

The commission is recommending that tech companies take "proactive" measures to detect and remove harmful content. It suggests a mix of automated detection, with strong human oversight to ensure both compliance, and that content isn\'t being unnecessarily removed.

Facebook, Google, and Twitter have already taken measures to purge this content. In December 2016, the three companies teamed up to collaborate on a shared database of the content and posters of terrorist content. In June 2017, Facebook shed light on its efforts to use artificial intelligence to quickly identify, flag, and remove terrorist content. 

But clearly, the EU wants these companies to step up their game. Thursday\'s announcement merely outlined "guidelines" — the one-hour ultimatum is not yet law. Yet being the operative word.',
                'created_at' => '2018-03-01 20:11:48',
                'updated_at' => '2018-03-01 20:11:48',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'Facebook job search expands to more than 40 countries',
                'slug' => 'facebook-job-search-expands-to-more-than-40-countries',
                'brief' => 'Facebook wants to hire more people — not just for itself but for businesses all over the world.',
                'content' => 'On Wednesday, Facebook expanded the job search and application tool it released almost a year ago in the U.S. and Canada to now serve more than 40 countries. It\'s kind of like LinkedIn, but applied to your Facebook network. Facebook users can look for and apply to jobs directly on the mobile app and on the web. Businesses with Facebook Pages can create new job posts, see applications, and schedule interviews.

For Facebook, the update is a way to formalize something they already saw happening on the site. 
Now, the process is easier for both sides — job seeker and creator — to see. Facebook also can bolster its message of community by at least taking partial credit in helping people find jobs. 

"We saw a lot of organic activity of businesses trying to hire," Alex Himel, VP of Local at Facebook, told Mashable. He cited a Morning Consult poll of 5,000 adults, commissioned by Facebook, that found that one in four people in the U.S. had search for or found a job on Facebook. 

"We looked at our internal data to make sure that\'s true. Some of that is existing organic activity is in posts and in paid ads," Himel added. The company declined to share those internal metrics. 

Job seekers and creators don\'t need to pay Facebook for any access to the tool. Jobs are viewable on Facebook\'s Marketplace, on News Feed, and in Facebook Pages. Businesses are welcomed to pay for Facebook ads to boost their job applications and target to specific candidates, but it\'s not necessary to use the feature. 

Here\'s how Facebook\'s tool works for a job seeker: 
Facebook users can filter down by local jobs, job categories, and job type. The job creator does not have access to any other information about your Facebook account besides what is publicly available, a.k.a. make sure your privacy settings are on. 

"Once you find [a job] that looks good, it\'s a couple simple steps to apply. The person is in completely [sic] control over the information that gets submitted to the business," Himel said. 

As of Wednesday, businesses on Facebook from about 40 countries have access to the tool to create jobs. Himel said the company chose those locations based on where they already saw "strength with active businesses on the platform" — as in, what countries were businesses already seeking job candidates via Facebook Pages. 

Here\'s how Facebook\'s tool works for a job creator:

When asked if Facebook posts about jobs would rank better on News Feed than links from LinkedIn, Himel didn\'t deny it and added that links from a third-party site like Facebook wouldn\'t surface on the Jobs portal. 

Facebook is "optimizing for user experience. We\'re helping them find a job that they\'re looking for. Right now the only jobs that are available in the Jobs browser are the ones that a Page is posting. My advice is a business that is looking to hire post a job directly on Facebook and work with their partners," Himel said.

Beyond this tool, Facebook is looking to invest more in local businesses in 2018. Himel noted that Facebook has invested more than $1 billion to help local businesses since 2011 and said that this year it plans to invest the same amount in teams at Facebook, more technology, and programs for business leaders to attend.',
                'created_at' => '2018-03-01 20:29:25',
                'updated_at' => '2018-03-01 20:29:50',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'LEGO ditches oil-based plastics for some of its toys, will use plants instead',
                'slug' => 'lego-ditches-oil-based-plastics-for-some-of-its-toys-will-use-plants-instead',
                'brief' => 'LEGO\'s plastic superheroes, astronauts, knights, and ninjas are, like most such materials, primarily made from oil. Legos have been made this way for nearly 70 years.',
                'content' => 'But the toy company now wants to wean itself from petroleum and produce its famous toys with plants instead — specifically tropically-grown sugarcane. 

On Thursday, the company announced it will begin producing its softer LEGOs — like its little trees and bushes — from sugarcane-sourced plastics. 

"It sounds high-falutin, but it\'s our belief that we owe it to children not to damage their planet by making their favorite toy," said Tim Brooks, LEGO\'s vice president of environmental responsibility and sustainable materials Center, in an interview. 

SEE ALSO: Drastic Arctic warm event stuns scientists, as record-breaking temperatures reach the North Pole

LEGO has started purchasing sugarcane from Brazil — but Brooks said the company ensured it\'s being grown on agricultural land, "so we’re not chopping down rainforest to grow the crop." The sugarcane sourcing also got a thumbs up from the Bioplastic Feedstock Alliance, which provides guidance on sustainably grown sugarcane.

Lego\'s polyethylene \'botanicals\' like trees, bushes and leaves.

Lego\'s polyethylene \'botanicals\' like trees, bushes and leaves.

IMAGE: LEGO

LEGO is using sugarcane to produce a specific, softer type of plastic, called polyethylene, for its plants and bushes. By the end of 2018, Brooks said that any LEGO box you buy will have sugarcane-sourced LEGO "botanicals."

Brooks recognizes that this is just a start, as polyethylene is only used in one to two percent of LEGO\'s total products. Most LEGOs — the famous blocks — use ABS plastics, which are hard, durable, and oil-based.

But LEGO hopes to make most of its "core products" from more sustainable sources, like plants, by 2030. 

Stephen Mayfield, a molecular biologist at UC San Diego and director of the California Center for Algae Biotechnology, said the company\'s move is a step in the right direction. "You’ll find haters, but it\'s way better than petroleum — so these people should be applauded for doing this," Mayfield said of sugarcane-based plastics. He has no affiliation with LEGO.

Switching from oil-based to plant-based plastics dramatically cuts the carbon footprint of a product by around 70 percent, Mayfield said.

"The more we can go to biological sources, the better it is," he said.

Additionally, Brazilian sugarcane is often boiled and processed using leftover plant matter — as opposed to using fossil fuels (like in the United States) to separate the plastic materials — said Mayfield. 

"The carbon footprint on that is pretty dang good," he said. 

An example of how LEGO has reduced the size of its boxes.

An example of how LEGO has reduced the size of its boxes.

IMAGE: LEGO

LEGO is not new to environmental initiatives. Like many toys, LEGOs traditionally came in big boxes — boxes containing lots of air, not LEGOs. The company has started shrinking its cardboard boxing, which Brooks said "takes 4,000 trucks off the road every year" as more boxes can now be transported at once. 

Beginning to use plant-based products will certainly help the company achieve its sustainability goals, though LEGO is just doing their part in a global economy still dominated by fossil fuels — finite resources that are the primary contributor to human-caused climate change. 

"It’s not the final solution," said Mayfield. "But if we wait for the final solution we’ll never do anything."',
                'created_at' => '2018-03-01 20:30:44',
                'updated_at' => '2018-03-01 20:30:44',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'category_id' => 5,
                'title' => '\'Harry Potter: Hogwarts Mystery\' trailer teases familiar faces',
                'slug' => 'harry-potter-hogwarts-mystery-trailer-teases-familiar-faces',
                'brief' => 'The first gameplay trailer for Harry Potter: Hogwarts Mystery gives us our first look at some of the familiar faces and magical spells we\'ll be seeing in the upcoming mobile game coming this spring.',
            'content' => 'In Harry Potter: Hogwarts Mystery, players get to make their own character and experience Hogwarts as a student, including being sorted into a house, meeting professors, learning spells, and forming friendships (and rivalries) with fellow witches and wizards.

The game is coming to both Google Play and the iOS App Store, and Google Play users can pre-register for the game now.',
                'created_at' => '2018-03-01 20:33:41',
                'updated_at' => '2018-03-01 20:33:41',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'category_id' => 3,
                'title' => 'Was Russia\'s election hack the greatest marketing campaign of 2016?',
                'slug' => 'was-russias-election-hack-the-greatest-marketing-campaign-of-2016',
                'brief' => 'Vladimir Putin may not be bounding on stage to accept them any time soon.',
                'content' => 'Regardless, all the ad industry\'s marketing campaign awards should go to the Russian leader for his spectacular 2016 election hack, according to an international alliance of advertising creatives. 

The anonymous group calls itself Project Meddle, and it claims to have already paid to enter a portfolio describing Russia\'s election activities to all the industry award shows: the Webbys, the One Show, the Cannes Lions, the Clios and the Addys.

"Like it or not, Russia created the most impactful campaign of the century," the Project Meddlers wrote. "As marketing professionals who spend their days using these same tools, we find ourselves humbled by the skill, innovation, and impact of Russia’s election-meddling campaign. And not in a good way."

Their tongues may be firmly in their cheeks, but the Project Meddlers have a point. As they note, Russia\'s involvement has already produced numbers that would be considered eye-popping at any ad agency: 760 million clicks on certified Russian fake news stories distributed via Twitter and Facebook (enough for everyone in the U.S. to have clicked three times), 288 million Twitter impressions, and a practically infinite amount of media coverage. Plus, y\'know, one very Russia-friendly U.S. president. 

SEE ALSO: Facebook admits that, yea, maybe it\'s not great for democracy

The genius of Project Meddle is to look at Putin the same as it would any client: he had a brand that was failing and fading on the international stage. In the years prior to 2016, despite its guerilla campaigns in Ukraine, Russia simply wasn\'t being taken seriously as a global power. The brand\'s glory days in the Cold War, all that spying and skullduggery, were a distant memory. 

Back then it was harder to ignore the fact that Russia\'s economy was smaller than Italy\'s. It relied, then as now, on a handful of increasingly unnecessary fossil fuels. In John McCain\'s famous phrase, Russia was "a gas station masquerading as a country." No gas station has ever been in greater need of a marketing makeover. 



Like any good ad campaign, the meddling had many outlets and years of psychological study of the target market. It wasn\'t just the brute force attack on voter registration computers in many states, which is what you might expect from the old-school Cold War version of the brand. It wasn\'t just the cunning email campaign (hack John Podesta\'s account and get a then-trusted source, Wikileaks, to release it in batches). 

It was also the Facebook posts filled with appealing lies (the Pope supports Trump! Denzel Washington supports Trump!), the subtle digs at a rival brand ("is Hillary healthy enough to handle nuclear weapons?"), the fake endorsements (it\'s Jesus vs. Satan!), the tacit support for the rival brand\'s other rival brand (many of us will never be able to unsee the Bernie rainbow coloring book) to divide and conquer the market.

SEE ALSO: Russia reportedly using \'Pokémon Go\' for election meddling is meme gold

Every conceivable angle was explored by Russian psy-ops; it even attempted to divide the left by getting activists to gather on Pokémon Go. You can practically see the CEO of the failing brand standing up and applauding when his creatives came up with that one.

And the thing is, the campaign worked. No matter what happens now, no matter how many Mueller-led indictments pile up at Trump\'s door, Putin\'s brand is strong. Russia will forever be the country that turned a close U.S. presidential election — making it seem not a gas station masquerading as a country, but a global force to be reckoned with for years to come. No new cola, no Apple Macintosh film by Ridley Scott, no Budweiser "wassup" commercial has ever generated this kind of brand overhaul effect. 

The organizing bodies of those ad industry confabs may not agree. Then again, Russia\'s campaign doesn\'t just have the kind of tangible results any agency would die for — recognizing it would also be a way for those dusty industry awards shows to overhaul their own image.',
                'created_at' => '2018-03-01 20:36:19',
                'updated_at' => '2018-03-01 20:36:19',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Artificial intelligence has beaten Q*bert, the iconic Atari video game',
                'slug' => 'artificial-intelligence-has-beaten-qbert-the-iconic-atari-video-game',
                'brief' => 'Nothing is off-limits to artificial intelligence — even your favorite old video games.',
                'content' => 'An artificial intelligence, developed by researchers from the University of Freiburg in Germany, has beaten the Q*bert arcade game by exploiting glitches in its design. 

In the game, players take the role of cartoon character Q*bert, who hops around a pyramid of 28 cubes. Every time Q*bert lands on a cube, it changes color. Players are tasked with changing every cube\'s color without being captured by enemies that also roam around the pyramid. 

The AI found two sleazy ways to beat the game. First, it baited an enemy to follow it, then committed suicide by jumping off its pyramid. Though Q*bert lost a life, killing the opponent in the process left the player with enough points to reincarnate and repeat the cycle. 

Additionally, by jumping around the pyramid in a (seemingly) random fashion, the AI caused the pyramid\'s tiles to begin to blink, and was granted more than one million points.  

The researchers believe that no human has ever uncovered these loopholes before, but this may not be entirely fair. The researchers tested their AI with an updated version of Q*bert — and the game\'s developer claims the original version didn\'t have such bugs. 

28 Feb

Miles Brundage
@Miles_Brundage
Replying to @WarrenDavis29 and 2 others
Whether this, from an AI paper, is a known bug: https://m.youtube.com/watch?v=meE5aaRJ0Zs …


Warren Davis
@WarrenDavis29
Since I designed and programmed the original arcade version, I can\'t really say much about any port. This certainly doesn\'t look right, but I don\'t think you\'d see the same behavior in the arcade version.

2:51 AM - Feb 28, 2018
21
See Warren Davis\'s other Tweets
Twitter Ads info and privacy
So it\'s possible that humans could have found these loopholes as well. Nonetheless, the AI was able to find them after only five hours of training, which is probably less time than it would take most humans to beat the game. 

The researchers used sets of algorithms called "evolution strategies." As the name implies, evolution strategies involve generating many algorithms and identifying those that perform the best through trial and error.  

In the paper, researchers suggest that evolution strategies can be considered "a potentially competitive approach to modern deep reinforcement learning algorithms." Deep reinforcement learning algorithms mimic human neural networks and teach themselves effective strategy. A number of well known artificial agents fall into this category, including Alphabet Inc.\'s DeepMind, which recently became one of the world\'s most dominant Go players. 

It\'s also possible that these algorithms could end up working together. "Since evolution strategies have different strengths and weaknesses than traditional deep reinforcement learning strategies, we also expect rich opportunities for combining the strength of both," the researchers wrote. 

This study is a good sign for our robot overlords, which grow more dominant every day. In a recent study, AI outperformed lawyers in interpreting legal contracts. A Google-trained algorithm has trained itself to recognize patients at risk of heart disease — it doesn\'t yet outperform existing medical approaches, but it\'s on its way. 

It\'s a serious, but exciting reminder to all humans. When it comes to skilled AI, nothing is out of reach — not even your childhood arcade games.',
                'created_at' => '2018-03-01 20:37:29',
                'updated_at' => '2018-03-01 20:37:29',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'category_id' => 2,
                'title' => 'This is the Apple Watch band that can detect irregular or dangerous heart rhythms',
                'slug' => 'this-is-the-apple-watch-band-that-can-detect-irregular-or-dangerous-heart-rhythms',
                'brief' => 'Heads up: All products featured here are selected by Mashable\'s commerce team and meet our rigorous standards for awesomeness. If you buy something, Mashable may earn an affiliate commission.',
                'content' => 'Listen up, Apple Watch users: A new FDA-approved band is on the market and it can help you monitor your heart in a whole new way.

Yes, you can feel when your heart is beating fast after a run or a nerve-racking situation — but most of us aren\'t doctors and can\'t tell whether this is normal or an actual problem. Detecting when a heart has a truly irregular rhythm by yourself is a toss up, and the only way to confirm an atrial fibrillation (AFib) is to get an electrocardiogram (EKG) from a cardiologist. 

AliveCor is a company known for their mobile heart monitors that can be stuck on the back of a smartphone and run an EKG. After two years of testing, AliveCor was given the green light by the FDA to market the KardiaBand as a heart-monitoring wristband for the Apple Watch.

According to a study conducted by heart doctors at the Cleveland Clinic, researchers found that the band\'s algorithm correctly distinguished AFib hearts from normal functioning hearts over 90 percent of the time. Basically, this means that the KardiaBand can give people an instant and pretty accurate idea of whether they have something to worry about — an analysis that could only previously be done during a trip to the doctor. 

Here\'s how the KardiaBand runs a 30-second EKG:



What\'s the big deal about irregular heart beats, you ask? If the abnormality is serious and not caught early, irregular rhythms can cause stroke, blood clots, or heart disease — so heart rhythm really isn\'t something to be ignored.

This isn\'t to say that AFib is always a life or death situation — not every too-fast or too-slow heart is an emergency, so don\'t freak out. However, many people are deterred from going to the doctor because they don\'t want to admit something is wrong, and overlooking possible AFib risks can lead to serious consequences. But thanks to KardiaBand, EKGs can now be done in the comfort of your own home. (Note: A doctor\'s analysis should still be sought out if the band tells you something\'s up.)

Mashable\'s Mark Kaufman writes:

As more health and fitness devices are designed to work with popular consumer tech, like Apple iPhones and smartwatches, it\'s helpful that doctors are scrutinizing some of these devices to ensure they work as advertised — even after they pass the FDA\'s rigorous protocols. 

For $199, you can get a 38mm or 42mm KardiaBand here — and if you want the KardiaBand but don\'t have an Apple Watch yet, you can snag the Apple Watch 3 here. If you don\'t have an Apple Watch and don\'t want an Apple Watch, AliveCor\'s mobile EKG monitors for smartphones are also up for grabs for $99.',
                'created_at' => '2018-03-01 20:39:39',
                'updated_at' => '2018-03-01 20:39:39',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'Mother\'s Day UK Gift Guide 2018',
                'slug' => 'mothers-day-uk-gift-guide-2018',
                'brief' => 'Heads up: All products featured here are selected by Mashable\'s commerce team and meet our rigorous standards for awesomeness. If you buy something, Mashable may earn an affiliate commission.',
            'content' => 'With Mother’s Day fast approaching in the UK (11th March), we have rounded up some of the best reusable, fair trade and environmentally friendly products that allow you to treat your mum while looking after Mother Earth. 

The environmental impact of cut flowers has been well documented. Most cut flowers we buy are grown in high energy consuming greenhouses in far away countries, producing large carbon footprints. Although the UK has recently seen a revival in UK grown flowers, why not try this environmentally friendly and practical solution? This window herb box planter has been hand made in Wiltshire using English Oak locally sourced from FSC approved woodland. Practical, stylish and sustainable. 



IMAGE: AMAZON


Handmade Natural Slate & Solid Oak Window Box Herb Planter - £20
See Details
Single use plastic of anything is bad. Disposable plastic shopping bags are some of the worst offenders. Since the 5p charge for all single-use plastic carrier bags in October 2015 there has been an 83% drop in the number of single-use plastic carrier bags being issued. Although the numbers are encouraging, the fight must go on and these LOQI eco-friendly reusable shopping bags are just the trick. 

Inspired by some finest works of art from the world\'s most famous artists, these bags will really help your mum to stand out from the crowd. Easy to fold away and store, waterproof and beautiful to look at, no one will ever want to leave one of these at home. From Van Gogh to Vermeer your mum can now be seen with a bag beautiful enough to be hung in a museum.



IMAGE: LOQI/AMAZON


LOQI Museum Reusable shopping bag - £8.95
See Details
A million plastic bottles are bought around the world every minute, according to the Guardian, rising to more than half a trillion of which that will be sold annually by the end of this decade. One of the most straightforward ways to combat this is reusable water bottles. 

Ozmo have designed a new hydration tracker that is more that is more than just an ordinary reusable bottle. The Ozmo bottle actually syncs with both your smartphone and your Fitbit app, to measure and record both water and coffee consumption making it easy to maintain a personalised hydration routine. If a smartphone app is a step too far for your mother, the integrated Led lights and vibrations alerts make this bottle virtually impossible to ignore and suitable for all technical abilities. Keeping your mum hydrated and the planet plastic free.



IMAGE: OZMO/AMAZON


Ozmo Unisex Hydration Tracker  - £37.49 + Free Delivery
See Details
SEE ALSO: Get yourself a collapsible water bottle to save space and stop waste

The recent introduction of the 5p paper cup charge in some London Starbucks and the imminent 25p ‘Latte Tax’ to be imposed by the UK government is hopefully heralding the end of our love of the disposable cup. You can make sure your mum is ahead of the curve with a reusable coffee cup, not only saving her money for each coffee that she drinks, but minimising her contribution to the staggering 2.5 billion disposable coffee cups thrown away each year in the UK.

This highly rated Bodum Vacuum travel mug is available in many different colours and is designed to maintain the heat of your drink while remaining cool to touch with a stainless steel double wall design. 



IMAGE: BODUM/AMAZON


Bodum Vacuum Travel mug ,  0.35L - £12.99
See Details
Of course your mum is already beautiful, but you can help her maintain her youthful essence with products that are organic, natural and kind to the planet. Big Green Smile has a large range of natural products that promise no animal testing, no phthalates, parabens, petroleum or palm oil (unless from an ethical and sustainable source). The business began in 2006 by selling water saving devices for the home and has evolved into one of the UK’s biggest online retailers of natural and organic products with 4.8/5 for customer feedback website on ekomi. 

Some of the most highly rated products include JASON 70% Certified Organic Vitamin E Crème. A potent anti-oxidant perfect for mature and dehydrated skin. 



IMAGE: BIGGREENSMILE


Jason Vitamin E Age Renewal Moisturising Crème - £9.99
See Details
Or the Pacifica Tahitian Gardenia Roll On or Solid Perfume. Guaranteed 100% vegan & vegetarian, Gluten-free with no artificial colours.



IMAGE: BIGGREENSMILE


Pacifica Tahitian Gardenia Roll On Perfume - £12.99
See Details
Make disposable cling film or foil wrapped sandwiches a thing of the past with Roll\'eat Boc\'N\'Roll reusable Sandwich Wrapper. Adaptable to different shapes and sizes to ensure easy fastening no matter how weird and wonderful your sandwich (or whatever) may be. More importantly, it\'s BPA free and machine washable to make it easily reused. 



IMAGE: AMAZON


Roll\'eat Boc\'N\'Roll Reusable Sandwich Wrapper - £7.95
See Details
But your mum doesn’t have a lunch box? Why not combine it with the back to basics approach of the Stainless Steel Ecolunchbox. Help your mum stop contributing to landfill whilst also avoiding harmful BPA, PVC, vinyl and lead.



IMAGE: AMAZON


Stainless Steel Ecolunchbox Three-In-One (Bento Style Lunchbox)  - £32.90
See Details
WeWood watches are made from 100% recycled timber, including Indian rosewood, mahogany, coffee tree and teak. Completely free from any toxic chemicals, and not a single tree is cut down in their manufacturing. In fact, for every watch you buy they will plant a tree.



IMAGE: WEWOOD


Wewood Alpha Women\'s Watch, Miyota Wood Brown - £116.12
See Details
The number of mobile phone users in the world is expected to pass the 5 billion mark by 2019. That means a staggering amount of plastic phone accessories (and packaging) being consumed and disposed. Pela, who describe themselves as ‘a team of nature loving entrepreneurs’ hopes to combat this in the tech accessory industry with their 100% compostable sustainable bio plastic iPhone and Andriod phone cases. 

Pela\'s iPhone case is made with a unique blend of BPA-free, plant-based biopolymers mixed with annually renewable flax shive. The innovative plant-based material is bio-degradable but formulated to only break down 100% in a composting environment. 

Pela are also members of 1% for the Planet, which means a portion of their annual sales goes towards clean water and clean ocean initiatives.



IMAGE: PELA / AMAZON


Pela Eco-Friendly iPhone or Android Phone Case - £35.00 & Free Delivery
See Details
Something as simple choosing chocolate can have a big impact. According to the Fairtrade Foundation ‘Behind every luscious chocolate bar and treat we devour throughout the year, there are six million people globally who depend on growing cocoa for their livelihoods.’ 

In 1998, Divine Chocolate entered the history books as the first ever farmer-owned confectionery brand in the UK. It is co-owned by the 85,000 farmer members of Kuapa Kokoo. (A cooperative in Ghana that is the sole supplier of the cocoa). According to the website this means that farmers are guaranteed minimum Fairtrade price for their cocoa, it ensures there is investment back into the community and the farmers are also able to secure a bigger share of company profits.

Luckily with Divine you don’t have to sacrifice taste for social good as the high quality chocolate has won numerous Great Taste awards and would certainly bring a smile to any chocolate loving mothers face. This tasting set means you can try 6 flavours to find your favourite. Also suitable for vegetarians.



IMAGE: AMAZON


Divine Chocolate Tasting Set.  Milk , Dark and White selection - £7.99
See Details
Looking for a unique Mother\'s Day card? Ethical Superstore have a selection of cards from Arthouse Meath; a social enterprise offering placements to adults living with severe epilepsy and learning difficulties. 100% of the Arthouse\'s profits go to the Meath Epilepsy Trust charity.



IMAGE: ETHICAL SUPER STORE - £2.55


Arthouse Meath Charity Wonder Woman Card
See Details
This Wilby Primrose Yellow Citibag has been designed by Meg Matthews, crafted in vegan and sustainable cork leather. It comes with a detachable leather chain and hand strap for multiple use. Founded on 2013, Wilby have created a UK-made vegan fashion range specialising in the \'clutch\' with a large range of sustainable vegan bags and accessories certified by Peta. This bag and others available at the Ethical Superstore and a must for the environmentally conscious fashion forward mum.',
                'created_at' => '2018-03-01 20:40:50',
                'updated_at' => '2018-03-01 20:40:50',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'China banned the letter \'N\' from Weibo and WeChat',
                'slug' => 'china-banned-the-letter-n-from-weibo-and-wechat',
                'brief' => 'In some sort of Sesame Street \'Letter of the Day\' nightmare situation, the letter N was temporarily banned on many of China\'s most popular social platforms.',
                'content' => 'On Sunday, China\'s Communist Party announced that it was planning to abolish the presidential two-term limit, which would enable Xi Jinping to stay in power indefinitely.

Some Chinese citizens weren\'t too keen on the plan. Apparently, many started criticizing it on popular messaging apps Weibo and WeChat, referencing dystopian novels like 1984, and poking fun at Jinping by invoking the popular (and hilarious) comparison of Jinping to — wait for it — Winnie the Poo. 

View image on Twitter
View image on Twitter

Manya Koetse
@manyapan
Could\'ve expected this, but still pretty creative. First images of "king Winnie" surfacing on Weibo in response to Xi\'s potential indefinite rule: http://bit.ly/2FuSasG  #XiJinping #kingwinnie

1:54 PM - Feb 25, 2018
145
157 people are talking about this
Twitter Ads info and privacy
But when they did, some got some error messages saying that many of the words they wanted to use were banned. 

Some users posted screenshots on Twitter of certain words that they realized were banned on Weibo, including "migration." The website China Digital Times has done an expansive audit of the list of banned words that relate to discussion around the end of term limits, which include "disagree," "Animal Farm," "lifelong," and others which directly or indirectly criticize the move. "Disney" was also banned, because of that whole Winnie the Poo comparison thing.

25 Feb

Li Yuan
@LiYuan6
Baidu searches for “migration” spiked after the news came out around 4 PM that China is eliminating a two-term constitutional cap on presidential terms. pic.twitter.com/2uUw41D0sy


顾忆
@guyi_guyi
"migration" is illegal in Weibo now pic.twitter.com/xvz88MlwfN

4:43 PM - Feb 25, 2018
View image on Twitter
40
15 people are talking about this
Twitter Ads info and privacy

China Digital Times
✔
@CDT
Now updated with more blocked terms, including "Disney," "personality cult," "the wheel of history," and "Brave New World." https://twitter.com/cdt/status/968336928927047683 …

11:09 PM - Feb 27, 2018
8
16 people are talking about this
Twitter Ads info and privacy
View image on TwitterView image on TwitterView image on Twitter

Manya Koetse
@manyapan
Various terms relating to the end of two-term limit Xi Jinping as of now no longer searchable on Weibo.

4:23 PM - Feb 25, 2018
172
187 people are talking about this
Twitter Ads info and privacy
View image on Twitter
View image on Twitter

Catherine Rampell
✔
@crampell
Among words newly blocked on Chinese microblogging site Weibo, in wake of announcement that presidential term limits may be abolished:
Animal Farm, 1984, disagree, my emperor, emigrate https://chinadigitaltimes.net/2018/02/sensitive-words-emperor-xi-jinping-ascend-throne/ …

11:00 PM - Feb 27, 2018
661
399 people are talking about this
Twitter Ads info and privacy
View image on TwitterView image on Twitter

Owen Guo
@BJ_Southerner
On WeChat, I shared a Reuters story about China’s proposal to scrap the two-term presidency limit with a family member. The text was apparently deleted by censors. She said ” I have not received the text.”

12:04 PM - Feb 25, 2018 · Beijing, People\'s Republic of China
125
165 people are talking about this
Twitter Ads info and privacy
And, of course, the English letter "N" prompted that same error message.

25 Feb

Sandra F Severdia
@underbreath
我........... https://twitter.com/CDTChinese/status/967770481033007105 …


Sandra F Severdia
@underbreath
pic.twitter.com/cmMhLMYm0J

4:40 PM - Feb 25, 2018
View image on Twitter
20
15 people are talking about this
Twitter Ads info and privacy
So what\'s with the letter "N" hate? In a blog post, the University of Pennsylvania\'s Victor Mair, a professor of Chinese Language and Literature\'s, explains the phenomenon. He says that N is the equivalent of the American "X," or an unknown quantity. So using "N" suggests a criticism of a never-ending term.

Some Twitter users also explained that N signifies "infinity," as well as the inability to say "No."

25 Feb

Jichang Lulu
@jichanglulu
Replying to @WLYeung @underbreath
N (possibly > 2) terms in office?


C.A. Yeung
@WLYeung
N = Infinity

5:42 PM - Feb 25, 2018
1
See C.A. Yeung\'s other Tweets
Twitter Ads info and privacy
27 Feb

Shawn Zhang 章闻韶
@shawnwzhang
impressive! you can\'t say "disagree" on Weibo. "disagree" is a violation of laws. pic.twitter.com/9lzOQp1JXf


Kasumi Shen
@kasumi2016
you can\'t choose N in a (Y/N) select item as long as you are still living in China...

6:49 AM - Feb 27, 2018
4
See Kasumi Shen\'s other Tweets
Twitter Ads info and privacy
According to Business Insider, the ban was lifted as of Tuesday morning. Which is great news to freedom of speech advocates everywhere, and of course, the cast of Sesame Street',
                'created_at' => '2018-03-01 20:41:50',
                'updated_at' => '2018-03-01 20:41:50',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'category_id' => 1,
                'title' => 'Monumentally stupid tweet blows up in blockchain company\'s face',
                'slug' => 'monumentally-stupid-tweet-blows-up-in-blockchain-companys-face',
                'brief' => 'The blockchain can\'t solve for stupid.',
                'content' => 'That painful truth hit the internet-of-things blockchain project Waltonchain hard today, with one Twitter huge fuck up leading to the erasure of tens of millions of dollars in the market cap of its associated Walton Coin.

And people are pissed. 

Here\'s what went down: On Feb. 8, the team behind Waltonchain posted a contest to Medium with the goal of spreading awareness about the platform. If you followed the @Waltonchain Twitter account, quote retweeted a specific tweet, dropped #WaltonchainLove in your comment, and tagged someone, then you were eligible to split a pot of 564.96 Walton Coins (WTC) with 213 other people. 

Pretty simple, right?

According to CoinMarketCap, on Feb. 8 one WTC was worth around $22. That means each winner could potentially get around $58 for just tweeting some stuff. Not life changing, but not bad. 

The problem came when the official Waltonchain Twitter account decided to announce the contest winners on Feb. 28. 


Waltonchain
@Waltonchain
Congratulations to all the $WTC winners who participated in our #ValentinesDay campaign! Please find the winners\' list below and contact us before March 7th to receive $WTC. #Waltonchain

*Please guard against scams accounts asking for tokens.https://medium.com/@Waltonchain_EN/waltonchainlove-velintines-day-campaign-winners-list-cf40ab28760 …

1:58 PM - Feb 28, 2018

Waltonchain Valentine’s Day Campaign Winners List – Waltonchain_EN – Medium
We are pleased to announce the lucky winners for our Valentines’ Day #WaltonchainLove Campaign! Please find the Winner’ list below:

medium.com
189
305 people are talking about this
Twitter Ads info and privacy
What happened next was, well, really goddamn dumb. 

Someone from that same Twitter account tweeted out a message that read like it was just a lucky Joe excited about winning the contest. The tweet was quickly deleted, but it was too late: A screenshot was posted to Reddit, people called the contest rigged, the company a scam, and a massive selloff soon followed. 

View image on Twitter
View image on Twitter

Ayesha Khan
@blockchain_ash
Just sold all my $wtc after @Waltonchain cheated and rigged a valentines giveaway. Shame on @Waltonchain  @Waltonchain_KOR  @WaltonChainUK  @Waltonchain_EN

12:15 AM - Mar 1, 2018
16
See Ayesha Khan\'s other Tweets
Twitter Ads info and privacy
View image on TwitterView image on Twitter

Barney Vaughan
@Barney_
A prime example of how not to do social media giveaways on Twitter from @Waltonchain 🤦🏻‍♂️

12:23 AM - Mar 1, 2018 · Liverpool, England
10
See Barney Vaughan\'s other Tweets
Twitter Ads info and privacy
View image on Twitter
View image on Twitter

Crypto Rick Ross
@CryptoRozay
Anyone know WTF is going on with @Waltonchain today? $WTC is putting a boss down today... Huuuuuhhh!! #Crypto sadness

11:44 PM - Feb 28, 2018
5
See Crypto Rick Ross\'s other Tweets
Twitter Ads info and privacy

CryptOrangutang
@cryptorangutang
Replying to @CryptoTutor @Waltonchain
This resulted in 30% drop in tokens value at one moment - a whooping 165M of market value disappeared because of one tweet. Damn right that person is fired lol

11:36 PM - Feb 28, 2018
32
See CryptOrangutang\'s other Tweets
Twitter Ads info and privacy
The Waltonchain Twitter account has yet to publicly address the screw up, but for many in the cryptocurrency space, their minds have already been made. 

View image on Twitter
View image on Twitter

Cryptopig
@gip_crypto
Urgent: sell $wtc. Fake draft. Scamm company discovered @Waltonchain $adx $trig $wabi

11:34 PM - Feb 28, 2018
9
See Cryptopig\'s other Tweets
Twitter Ads info and privacy

Nikola Cvrtnjak
@nikolacvrtnjak
Lol @Waltonchain #wtc $wtc todays fail was epic. I suggest to $wtc hodlers to move their funds to projects with non-shady teams... $stk $exy $ncash etc.

12:50 AM - Mar 1, 2018
See Nikola Cvrtnjak\'s other Tweets
Twitter Ads info and privacy
Meanwhile, the folks over at r/Buttcoin — a community dedicated to mocking cryptocurrency diehards — are loving every minute of it. 

"Luckily for them Twitter doesn\'t use Blockchain," joked one redditor. "The tweet would remain there in the public forever if it did."

"LOL, this kind of error reminds [me] of kids in school that made up having girlfriends over MSN," wrote another. 

"She isn\'t made up.... she lives in Canada," read the reply.

While definitely a bad look for Waltonchain, this entire fiasco might have one overall positive outcome: the reminder that distributed networks aren\'t impervious to really dumb tweets. 

UPDATE: March 1, 2018, 10:03 a.m. PST Waltonchain issued a statement late Wednesday night, officially blaming the disaster on an employee and apologizing. 

"A Waltonchain team member was among the winners and excitedly tweeted using the wrong profile," claimed the company. "We officially state that this team member\'s participation and prize (2.14 WTC among the total pool of 564.96 WTC) are cancelled, and from now on team members are prohibited to participate in any of our official campaigns."',
                'created_at' => '2018-03-01 21:09:23',
                'updated_at' => '2018-03-01 21:09:23',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'category_id' => 5,
                'title' => 'Disney celebrates \'Black Panther\'s success by donating $1 million to kids in STEM',
                'slug' => 'disney-celebrates-black-panthers-success-by-donating-1-million-to-kids-in-stem',
                'brief' => 'Yes, Black Panther\'s Wakanda isn\'t real — technically. But life continues to mimic art, as the film inspires more real-world activism tackling the film\'s underlying themes of black empowerment.',
                'content' => 'To celebrate the Marvel movie\'s unprecedented, record-breaking box office success, Disney is donating $1 million to the Boys & Girls Clubs of America. According to a press release, the organization is dedicated to supporting young people in STEM, with a specific focus on underserved communities.

“It is thrilling to see how inspired young audiences were by the spectacular technology in the film,"  Disney CEO Robert A. Iger said in a statement. "So it’s fitting that we show our appreciation by helping advance STEM programs for youth, especially in underserved areas of the country, to give them the knowledge and tools to build the future they want.”

Black Panther is set in the fictional African country of Wakanda, the most technologically-advanced nation in the world that gets its power from vibranium. It was already garnering high praise for featuring STEM role models like Shuri, the brilliant teenager responsible for Wakanda\'s tech innovations.

The MVP of Wakanda

The MVP of Wakanda

IMAGE: MARVEL STUDIOS

Mimicking a scene from the movie, Boys & Girls Clubs of America will use the grant to build STEM Centers of Innovation in places like Oakland, Harlem, and Atlanta. Their curriculum allows kids to explore their interest in STEM through state-of-the-art technology like 3-D printers and robotics.

So, presumably, we can expect our future Black Panther suits to be 3-D printable.

This isn\'t the only example of public action inspired by Black Panther, either. Black Lives Matter activists began a #WakandaTheVote movement, which helped register voters at screenings of the movie.

We know many real-world Shuris are out there — and they won\'t need vibranium to change the world.',
                'created_at' => '2018-03-01 21:11:10',
                'updated_at' => '2018-03-01 21:11:10',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'category_id' => 2,
                'title' => '3D-printed smartphone microscope is handy when you can\'t bring a bigger one',
                'slug' => '3d-printed-smartphone-microscope-is-handy-when-you-cant-bring-a-bigger-one',
                'brief' => 'OK, so you can\'t bring a microscope everywhere with you.',
                'content' => 'But you can certainly take this 3D-printed version, designed to clip onto your smartphone and work with its camera.

The device was developed by researchers at the ARC Centre of Excellence for Nanoscale BioPhotonics (CNBP) at Australia\'s RMIT University, and is the subject of a paper in Scientific Reports.
Requiring no external power or lighting source, the smartphone microscope is slated to be a handy tool for conducting fieldwork in remote areas, especially when bringing a larger microscope is impractical or unavailable.

Researchers say unlike other smartphone microscopes, CNBP\'s version takes advantage of the flash that\'s built into most phones. Internal illumination tunnels take light from the camera\'s flash to brighten the samples from behind. 



IMAGE: CNBP

"Almost all other phone-based microscopes use externally powered light sources, while there’s a perfectly good flash on the phone itself," CNBP research fellow Antony Orth explained in a blog post.

"External LEDs and power sources can make these other systems surprisingly complex, bulky and difficult to assemble. The beauty of our design is that the microscope is useable after one simple assembly step and requires no additional illumination optics, significantly reducing the cost and complexity of assembly."

What\'s more, the 3D printer files needed to create the smartphone microscope have been released freely online by the researchers.

Orth said he and his colleagues have successfully tested the smartphone microscope on samples such as zooplankton and cattle semen. Now other researchers can do the same.',
                'created_at' => '2018-03-01 21:12:14',
                'updated_at' => '2018-03-01 21:12:14',
            ),
        ));
        
        
    }
}