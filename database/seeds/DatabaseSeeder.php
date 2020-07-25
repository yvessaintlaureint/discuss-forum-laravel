<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'id' => 101,
		    'name' => 'Muhammad Rizqi Tsani',
            'email' => 'rizqitsani@gmail.com',
            'phone' => '085649070769',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		    'password' => Hash::make('rizqitsani'),
		    'avatar' => 'foto.jpg',
        ]);
        DB::table('users')->insert([
        	'id' => 102,
		    'name' => 'James Rafferty Lee',
		    'email' => 'jamesrafe10@gmail.com',
            'phone' => '081524008282',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		    'password' => Hash::make('jamesrafe10'),
		    'avatar' => 'foto3.jpg',
        ]);
        DB::table('users')->insert([
        	'id' => 103,
		    'name' => 'Reihan Nanda Ramadhan',
		    'email' => 'reihannanda2000@gmail.com',
            'phone' => '0817756788',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
		    'password' => Hash::make('reihannanda2000'),
		    'avatar' => 'foto2.jpg',
        ]);
        DB::table('threads')->insert([
            'user_id' => 102,
            'id' => 91,
            'question' => "How do I get motivated every single day?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 101,
            'thread_id' => 91,
            'body' => "Short answer - You don’t, but you can have the next best thing.

This idea that there’s this perma-motivated self-help guru who wakes up every day at 5 a.m, works out, meditates, feeds the homeless, then goes to complete a 14-hour workday on his seven-figure side business, just isn't true.

There are the rare people who do work this hard, say someone like an Elon Musk, but he has goals that necessitate that level of effort.

If you’re able to create a life where you’re motivated, in general, you’ll be just fine.

This is a place you can get to and this attitude will carry over into the actual days where you don’t feel so motivated.

Take my day for example. I didn’t feel extremely motivated to do much of anything.

Still, I wrote two articles, will certainly hit the gym later, work on some videos, and record an episode for my podcast.

Now, will I work a 14 hour day? Probably not.

Will I blaze through every task with peak alertness and efficiency? Definitely not.

But I will do the thing I’ve managed to do almost every single day for the past five years of my life since I started this self-improvement journey.

I will work on something that moves the needle and make incremental progress along the way.

This boring and unsexy process is how to cultivate a default level of motivation that’s higher than most people.

That’s the thing — this process of gradual growth creates a baseline most people can’t get to because they never reach that tipping point where motivation turns into habit and discipline.

90% of writers struggle to sit down and write anything, let alone daily. On a really bad day, I’ll still eek out at least 1,000 words, but usually somewhere from 3 to 4,000.

Most people struggle with getting to the gym regularly at all. I go 5 days a week and I never once have to decide to go. I just go.

I might blow the entire rest of the day after spending 2–3 hours working on meaningful things for my mind, health, and creativity, but I’ve created that baseline that makes my lows not all that low and sets myself up for extremely high highs.

Here’s how to do the same thing in your life.

How to Understand How Motivation Works

Your first flaw is thinking you don’t have motivation.

You have an abundance of it.

You make decisions based on what you’re motivated to do constantly.

Why do people go to work every day even if they hate their jobs? Money, mainly not being out on the street homeless, is quite strong and persuasive motivation — so much so than you never ponder whether or not you’re going to go to work.

You need motivation to watch Netflix. You’re compelled by the entertainment of the shows, look forward to an escape from reality, or you genuinely want to wind down after a long day.

Motivation is context dependant. Think of a young kid with the dirtiest room you can imagine and Cheeto stains on his T-shirt. Yet, he’s been playing a video game for 8 hours straight. He’s highly motivated.

Dispel the myth you’re not driven by motivation. You are.

The problem is, you haven’t found a compelling reason to motivate yourself to do the really worthwhile things in life—things that require delayed gratification, facing your doubts, and overcoming obstacles.

The Compelling Reasons Framework

How do you find something that compels you to do the work? You can draw a compelling reason from a variety of different places, but you have to make it compelling and you have to act quickly on the emotion that reason causes.

Sometimes, you’ll find a very compelling reason, you’ll get fired up, but then you’ll fizzle out. You can repeat this process over and over again. Most people do.

But, out of nowhere, you can find a reason that sticks long enough for you to reach the next step in creating lasting motivation.

This is why I tell people to focus on guessing their talents and strengths then using them to run experiments.

To this day, I’m not a super-motivated guy, but I built such a solid foundation because I found something I took to quickly and saw a future in with writing.

I wasn’t great at it to start, but I could tell I had a chance to be good early on.

If you find something like that, the motivation you draw from gradually getting better spills over into other areas of your life.

Aside from, ‘I might be good at this’ some other compelling reasons to change your life are:

Future extrapolation - If you can vividly picture how much your life is going to suck if you don’t change, you can compel yourself to change. When I was 25, I visualized the rest of my life working some shit job and never having control over my life for the next four decades. Highly motivated.
The people close to you - My motivation to make something out of my writing career went up when I had a child. Grant Cardone has a saying, “A lot of parents will go broke for their kids, but few will get rich for them.”
Staying alive - The obvious example, even though controversial to say these days, is that failing to eat right and exercise can shorten your life span. But so can working a job you hate and the stress that comes with. So can the preventable illnesses you incur by sitting in a cube for 30 years. So can the myriad of issues — mentally, physically, and spiritually—that derive from not living a life of purpose. Look at some of the people in society. They’re not just spiritually sick. Literally, they’re sick.
The most compelling reason of all, the one that each other reason I mentioned ties into, is that you don’t want to end up like most people in society. You just don’t.

They’re good people. Hard-working. Intrinsically equal. But spending a third of your life doing what you don’t want to do just isn’t an ideal life. Nor is having zero control over your time. Nor is taking all your dreams to the grave with you because you were scared of nothing more than social rejection and a bruised ego.

That’s fucked.

There’s your reason to be more motivated. Not being motivated is absolutely fucked.

Understand this, and move to the next step.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 91,
            'body' => "Reach the Traction Point and Follow the Self-Improvement Arc

These two concepts are the core of everything I’ve learned and taught about self-improvement. I basically mention them in every single article because they’re that important.

When you’re trying to build a new path for your life, completing the entire path itself isn’t important at all.

You just need to complete the first 20 percent of the path and you’re most of the way there. Most people quit basically instantly.

About 95 percent of people who try an unconventional life path, business, or even a long-term goal like getting in excellent shape, quit before six months.

Few make it past a year. Almost none make it five plus.

As you pass each milestone — 90 days, six months, a year, few years, five years — your odds of quitting fall sharply. Make it six to 12 months and you really have a shot.

You want to make something stick. You don't have the full dream yet, but you have signs that success is possible — an audience, some customers, a two-pack at the top of your stomach, whatever — and you deposit little subconscious signals into your brain that you’re someone capable and deserving of success.

You do this piece by piece. When I first started writing five years ago the prospect of writing three books, quitting my job, and owning a six-figure business wasn’t even in the realm of reality for me.

But it didn’t need to be.

Your biggest and wildest accomplishments will fall outside of what you currently think you’re capable of. So don’t even worry about them. Focus on getting traction first.

Next, there’s the self-improvement arc, which is just a fancy way of saying you’ve gone through the process of achieving a long-term goal.

Once you go through an entire arc of doing something significant, you realize just how limiting your beliefs are. You finally do realize anything is possible.

And, when the next venture arises, you know from day one that you’ll never quit. You don’t have to guess or think.

I started a YouTube channel about a year ago and was able to commit a half-decade to work on it, just like that. The decision was set in stone right away.

After settling into my ‘dad bod’ during my marriage and finding myself 50 lbs heavier than I am now, I knew when I went to the gym on day one that it was a forgone conclusion.

Why? Because I’ve gone through the arc, the arc that is much like a workout routine — painful with little to no results, to begin with, some progress six months down the road, and effortless to continue once you have a year under your belt.

Follow this arc enough times and you reach the state of permanent motivation.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 91,
            'body' => "After All That, You Can Reach “Daily Motivation”

Some days I don’t feel like working all that hard and I don't. I don’t wake up feeling like Tony Robbins every morning.

When I say I have daily motivation, it means that I’m certain my life is moving in a positive direction and that I’m going to do at least something to keep moving it that way.

I don’t worry about quitting, ever. I still have a bunch of self-doubts when it comes to larger goals, but I know they’re BS.

And since I’m doing something I enjoy and have spent a ton of time getting good at, all it takes is for me to start typing to get in the mood to write.

You can reach this point in your life too, where you have this foundation built on a skill you enjoy and a life path you gradually built.

But no one can hit that traction point for you. Only you can do that.

I will leave you with some words of encouragement, though. I tried and failed at dozens of things before I got writing to stick.

I’ve been at truly lazy points in life with little to no motivation. But then, one day I stumbled across something worthwhile, decided to commit to it, and just…never stopped.

The same thing can happen to you and I sincerely hope it does.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 91,
            'body' => "Who needs motivation when you can die!",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
            'user_id' => 103,
            'id' => 93,
            'question' => "What would be the implications if Trump expands sending unidentified federal agents to capture protesters in cities across the country?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 93,
            'body' => "Even IF it were true that riots were a daily occurrence and there’d be billions of dollars in damage, NONE OF THAT IS A FEDERAL CRIME.

None of that warrants putting federal agents on the streets of cities, picking up people who are doing nothing wrong, putting them in unmarked vehicles, taking them to undisclosed locations, holding those people there for hours, and then releasing them without any further actions.

Even IF it were true that riots were a daily occurrence and there’d be billions of dollars in damage, that does not warrant this.

This is how Hitler took control of Germany in the late 20’s, early 30’s.

This is how fascism gets a hold.

This is the next step of a fascist state, where people are no longer allowed and free to speak their minds if they happen to disagree with the leader.

It starts with the leader blaming the media for portraying the holy leader as a failing human being and sticking to the facts that are contradicting what the leader is saying and what he is wanting his followers to believe (the press is “truly the enemy of the people[1],” check).

It starts with the leader justifying and encouraging violence (““If she gets to pick her judges, nothing you can do, folks,” Mr. Trump said, as the crowd began to boo. He quickly added: “Although the Second Amendment people — maybe there is, I don’t know[2].” ” “If you see somebody getting ready to throw a tomato, knock the crap out of them, would you[3]?” “I’d like to punch him in the face,” he told the Las Vegas crowd when one protester was ejected[4].” check).

It starts with the leader lying about as many things about the state of the country as possible, and twisting it so that his followers will hate the right kind of people ('I heard we have one of the lowest, maybe the lowest, mortality rate anywhere in the world[5]' 'The baby is born, the mother meets with the doctor. They take care of the baby, they wrap the baby beautifully. And then the doctor and the mother determine whether or not they will execute the baby[6].'our Country losses (sic) 250 Billion Dollars a year on illegal immigration, not including the terrible drug flow[7] check[8])

And it starts with the leader making the other side out as traitors of the country, as people who want to destroy the country instead of building it up (“Trump retweets ‘Democrats enemy of state[9]“alleging that they “hate our country[10]””check).

These are only the starting steps. The next step is what’s happening now: setting federal police against your own population. That’s where we are now.

This is all straight out of the book “How to really change your reasonably democratic country into a fascist one in 12 easy steps.”

Come November we will have the chance to end this project. If we don’t…. the US will be a fascist state before the next elections, and we may not see next elections again.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 101,
            'thread_id' => 93,
            'body' => "The implications? I think this is a dress rehearsal for Election Day.

Oregon is actually a red state—or at least a pink one, EXCEPT for the Portland metropolitan area, which outnumbers the rest of the state. So what were to happen if on election day, the president declares that are riots going on in Portland, and sends in his jack-booted thugs? They then tear-gas people waiting in lines to vote, kidnap people pulling them in vans to be detained until after election day, never charged? Or forces polling sites to be closed?

Oregon happens to have vote-by-mail. But the president is attacking that. https://www.washingtonpost.com/politics/as-trump-attacks-voting-by-mail-gop-builds-2020-strategy-around-limiting-its-expansion/2020/05/31/a17ccfa0-a00d-11ea-b5c9-570a91917d8d_story.html and the Republicans are trying to bankrupt the US Postal Service. He has also appointed his henchman US Postal Service faces challenges as new postmaster takes over, and the GOP is trying to bankrupt it. https://www.washingtonpost.com/business/2020/04/11/post-office-bailout-trump/. Don’t be surprised if the USPS announces just before November that they will no longer deliver mail-in ballots as a matter of policy.

So then polling stations are hastily erected, resulting in long lines, and of course there will be White Supremacists around to try to provoke the Antifa folk, giving Trump the pretext to send in his jackboots to beat up people in line to vote, kidnap and detain them, and tear gas them.

And there are other states also, that would be red or pink were it not for a single large metro area that is overwhelmingly Democrat.

Crushing mail-in voting, using outright thuggery in some cities, these are going to be the new tools in the toolbox. Trump and the GOP know they cannot win the old fashioned way, through a majority vote, their only path to victory is to make it so the opposition cannot vote as much. Voter ID, purging the voter roles, disenfranchising felons, shutting down polling places in minority districts, to these tools are now added attacking mail-in voting and the kind of thuggery that once only happened in third world countries. And I will not be surprised to learn if there are other forms of cheating being discussed.

“Oh Dallas, you’re just being paranoid” some have told me. But those same people would have told me the same thing if I had said Trump would be sending paramilitary units into US cities who would be kidnapping and beating up protestors in the streets of a major US city, but are now making excuses for it, and buying at face value Trump’s excuses. There is much that is happening, has happened that if I told you in 2015, you would not have believed it, and now it is explained away, excuses made for it, and these excuses would never fly if it had been a Democratic president doing the same.

On November 7, we will learn whether or not the US is still a democracy or not.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 93,
            'body' => "When you approve of unconstitutional control and violence against your fellow citizens, you’re saying that when it’s your turn, you’ll be fine with being taken without question into custody by masked soldiers.

That’s the way it works. You approve thuggery against the people you don’t agree with or the group you think of as less-than, but as is always the case with authoritarians like Donald Trump, you’re eventually going to be on his shit list, too. Everybody who doesn’t agree 100% with him will pay. And even those who do agree with him will live under restrictions they do not want, watching their every move lest they, too, get swept up. He has shown he does not believe in the Rule of Law. He believes in the Rule of Trump.

Read In the Garden of the Beasts or any good history of the rise of the Nazis in Germany. A lot of ordinary Germans approved of sanctions against the Jews. Those sanctions seemed very reasonable at first, and they were swayed by the Fuhrer’s rhetoric of blame and patriotism. Inch by inch, he took power, always using the same kind of rhetoric we hear from Trump. You are under attack. I’m the only one who can save you. Ignore everything except what I say.

When soldiers started attacking mainstream German citizens on the street, only then were they finally startled and horrified. They had thought this treatment was acceptable or necessary for others, and that it would never apply to them. But by then it was too late. It was no longer optional not to be a Nazi. The Rule of Law was gone; there was only the whim of a madman.

We learn, or we suffer the same fate.

Niemoller was a Lutheran pastor who agreed with Hitler’s sanctions against the Jews. He met with Hitler, who gave him assurances that the Protestant churches would never come under Nazi control. Like all tyrants, Hitler lied. When Hitler did go after the churches, and Niemoller protested, he found himself in a concentration camp alongside the people he was earlier willing to throw under the bus.

If you don’t speak up for everyone’s rights, you endanger your own.


Alex’ body is better than mine.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
        	'id' => 101,
            'user_id' => 101,
            'question' => 'How do face recognition algorithms detect human faces?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 101,
            'body' => "A face recognition technology is a technology capable of identifying or verifying a person from a digital image or a video frame from a video source. It is typically used as access control in security systems and can be compared to other biometrics such as fingerprint or eye iris recognition systems.

Here are at least two processes involved - detection - knowing there''s a face in there somewhere (~ if there is something vs. nothing), and recognition - the ability to recognize what type of thing it is or whose face it is).

Facial recognition technologies vary, but the basic steps are the following:

Step 1. A picture of your face is captured from a photo or video stream. Your face might appear alone or in a crowd.

Step 2. Facial recognition software reads the geometry of your face. Key factors include the distance between eyes and the distance from the forehead to chin. The software identifies facial landmarks that distinguish one face from another.

Step 3. Your facial signature (like a mathematical formula) is compared to a database of known faces.

Step 4. As a determination is made. Your faceprint may match that of an image in a facial recognition system database or not.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
		DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 101,
            'body' => "One of the earliest and simplest face recognition algorithms uses eigenfaces and principal component analysis.

The basic idea is that most human faces are made of similar features, but are added together in different amounts. Using principal component analysys on a large set of images with human faces you can break down the images into a smaller set of eigenfaces. These are the average faces that the people tend to share, or a set of standardized face ingredients. The human faces being recognized are then just these faces added together in varying amounts. This method is fairly fast and efficient, since you don''t need too many eigenfaces to describe a large set of people.



Set of eigenfaces.

There are many other approaches that also work for facial recognition that try and correct the issues of using eigenfaces. To try and reduce the dependency on similar lighting and pose of the face one method uses fisherfaces. Another method tries to match the faces shape instead of the texture, allowing for better use if the face is tilted or in an untrained pose. More recently theres been much more work being done in using high resolution face images or even 3-D face scans to try and match people. As with most aspects of machine learning there are many different ways to approach this problem.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('threads')->insert([
            'user_id' => 103,
            'id' => 102,
            'question' => "What’s the biggest thing you hid from your parents as a teenager?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 102,
            'body' => "Running a large-scale black market at school.


As I’m sure you know, school cafeterias do not sell food at reasonable prices.

You’d be looking at four bucks for a carton of juice, a dollar for a couple of ice pops, two-fifty for a Pepsi - it’s a bit of a joke.


One day on the way to school, I found a dollar on the ground.

Nice.

I went into the nearest supermarket and bought a chocolate bar. Once I got to school, I reached into my bag, pulled out the bar and prepared to open it.

A guy sat down next to me and asked:

“Can I have that?”

“No.”

“Please?”

“No.”

“Pretty please?”

“I’d like to inform you that the physical appearance of your vocabulary makes no difference to how I perceive it.”

“What?”

“No.”

The guy showed me two bucks.

I gave him the bar.

The next day I went back to the supermarket and bought two chocolate bars.

Once I got to school, I sat down and the same guy sat next to me.

He gave me four bucks.

I looked at him, confused.

He pointed to the two bars of chocolate in my hand.

The next day, I bought myself four bottles of juice.

As I was opening one, the same kid sat down came and offered me three bucks each.

I took it.

A few days later I was back at the supermarket.

I spotted a sign:


I realised I could make a quick buck - I bought twelve dollars’ worth, put them in my backpack, and walked to school.

I sold these Pepsis off at a dollar each. They went like hot cakes. To be honest, they sold faster than hotcakes. A kid who was selling them went broke after buying heaps of pancakes and having no customers

Three days a week, I was raking in at least fifteen dollars in profit. That’s about fifty a week, which isn’t bad for a few minute’s work.

Then I made a horrible mistake:


Coke.

A guy called Richard Cranium decided that he didn’t like me because I refused to give him a free can.

He ratted me out:

“MISS! ASHER HERE IS SELLING COKE TO EVERYONE!”

My fifty-a-week business went down the drain in fifteen seconds.

How sad.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 102,
            'body' => "My parents were pretty cool, even though strict. We had household rules that were chisled in stone, but they were few. We were not allowed to curse, have porn (in those days, Playboy was all we knew about and it was considered porn). We did assigned chores around the house without backtalk. We were allowed to go out and run the neighborhood, as long as we were home by dark. Pretty simple rules to follow.

By the time I turned 14, both my brothers were in the Navy. I had my own room for the first time in my life. The largest bedroom in the house was shared between me and one brother. About a year after Barry enlisted, Mom and Dad realized “Hey, Steve has the biggest bedroom. That's not fair.” As those who have read my previous posts know, I've always been a smart-ass. I started negotiating with my parents for perks to change rooms. I would have changed regardless, but it was fun challenging the status quo. Remember, this was 1969 and the year of Woodstock.

They finally agreed to let me paint the room to my taste, as long as it wasn't painted black. We finally came to a decision of purple. Mom and I went to a local paint store to pick out the shade of purple. Mom was leaning toward a pastel, while I picked out one that came as close to black as they made. We argued over the samples, with the young sales clerk watching amused until we agreed on a medium shade. He added the coloring to the base and we bought two gallons. The painting was left to me, and soon, I had the walls and ceiling painted. Mom came in to inspect it when I finished, and said “Well, it looks dark, but it'll lighten up when it dries”. Not!

The sales clerk mixed the paint like I had wanted. I guess, being young, he wanted to put one over on my parents. They let it go, and when my grandmother saw the color, she told me she'd make me curtains. Grandma was reeeaaaallly cool. She measured and made curtains of crushed velvet in the darkest purple the fabric store carried, with a bedspread to match. The floor in the room was black marbled tile, and with the curtains closed and the lights off, it was like being in a cave.

I installed black lights (anyone remember those days?) I had black light posters on all the walls, maybe a dozen or so. Mom took a couple years to get used to it, and usually avoided the room unless it was necessary.

Now, what I hid from them was scandalous! How dare I be so disrespectful? My one act of rebellion? I put a poster on the ceiling, so it could only be seen when laying on the bed. The poster was from the movie “Easy Rider” and showed Dennis Hopper “Billy” flipping a bird.

It hung there 5 years without my parents knowing. I was such a bad-ass, wasn't I? Mom finally saw it the week I moved out when I was getting married. She saw it and asked where it had come from, and I pointed. All she did was shake her head.

I had to help re-paint to a pastel blue. It took four coats to cover the purple. The curtains stayed for a while.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
        	'id' => 104,
            'user_id' => 103,
            'question' => 'What innocent-seeming picture is actually heartbreaking?',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 104,
            'body' => "John-Pierre Adams.

A French footballer, has been in coma for almost 40 years due to a mistake his doctor made while putting him to sleep for a surgery to repair a torn ligament.


He was 34 when he went into coma. He is 71 years old now.

He has spent over 35 years unconscious. The time he has spent in coma is now officially more than the time he has spent being aware of himself and of his surrounding.

The sad and traumatic part is the said doctor and his colleague only went to jail for a month and was fined about 815 dollars for an error that has cost a man his entire life, cost his family a father and a husband and cost the world a great athlete.


His wife Bernadette, who he married in 1969 still stays by his bed till today, looks after him, feeds him and with the help of nurses and physiotherapists available, she’s able to bathe him and provide 24hours a day care. No love I know beats this.

- A story of love. Of pain. Of tears.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 101,
            'thread_id' => 104,
            'body' => "This is Magda Newman, expecting a baby. Pre-natal scans told her that she was going to have a nice boy.


She labored for nearly 17 hours before giving birth to her son.

You would expect her and her husband, Russel, to be overwhelmed with the joy of bringing a new life into the world?



It might be the best moment of their life, but at the same time, also the worst.

As her husband, Russel Newman, took a closer look at the baby, he screamed, “OMG! What happened? What's happening?” Chaos and alarms ensued as nurses took the baby away into the back room without letting Magda take a look.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
            'user_id' => 102,
            'id' => 103,
            'question' => "How will the GOP change (or will it) if Trump loses the 2020 election?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 103,
            'body' => "Depends in part on how badly he loses. Starting with the Senate.

But even if the GOP loses the presidency and the Senate, it will still have undisputed control of dozens of states, centered on the former Confederacy. It will still control the Supreme Court and a large part of the federal judiciary. it will still be funded in the billions by the Angry Billionaires’ Club. And Trumpismo is a cult of personality, so they will still kind of worship their Dear Leader, even if he’s no longer in power.

Suppose he starts a right wing nationalist TV channel. Haven’t all the deep Red state governments sworn allegiance to him? Couldn’t he immediately start running again for 2024? He’d only be a year older than Biden is now. And to superficial observation he looks like a stud in his 40s…if you don’t look closely.

And the GOP could easily regain the Senate in a near-future election, because the constitutional nature of the Senate favors Republican control. Just as the Electoral College means a Republican could lose the popular vote by five million and still win the presidency.

So if Trump’s defeated and the Senate lost, it doesn’t mean the war is over.

“Eternal vigilance is the price of freedom.”

Neofascist movements are hard to quell. Especially in the age of social media.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('threads')->insert([
            'user_id' => 102,
            'id' => 105,
            'question' => "What do I do if I drank 440 mg of caffeine and I feel numb? I am 13 years old. also scared to go to sleep due to thinking i am never going to wake up",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('threads')->insert([
            'user_id' => 101,
            'id' => 107,
            'question' => "How or where did you meet your spouse/partner?",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('replies')->insert([
            'user_id' => 103,
            'thread_id' => 107,
            'body' => "I met my wife at a local movie theater in Ohio. She just moved there after doing an internship in another state. I just moved back from China a few months before. The only people I knew were my relatives, but they were all busy with their families and work. My job was stressful, so afterwork on Fridays, I had a habit of going to see movies by myself to relax. My wife had not started working yet and she was exploring areas around the city, so she decided to also see the same movie as me, Boyhood. It was in a locally famous art house theater. This theater was old fashioned so there were only 5 or 6 screens, and you had to wait for the movie to be set-up. So my future wife and I were waiting outside in a line to enter the movie.

I am a fairly friendly guy, so I started to talk to her about something, not sure what. We talked quite a bit and sat near each other in the theater. After the movie, I asked her if she wanted to get coffee and discuss it. She agreed, it seemed we both liked it quite a bit. If I remember correctly, I asked for her email, not even her phone number.

I contacted her a month later, she had forgot who I was. I had been busy and did not get around to contacting her. I asked her if she wanted to each lunch and go to the local downtown art museum one Saturday, she agreed. That outing seemed to go well. Not long after that, we formally started dating.

One funny thing, was that I think I asked my wife where she was from, because she said she just moved to Ohio. She said, she had was in Florida for a year, but before that she was living in Maryland.

I assumed she was Chinese American, having grown up completely here or having lived here most of her life. About a month after we started dating I found out she was from Hong Kong. My wife had always gone to English speaking schools in HK, so she had no real accent. I came to find that if you listen to her speak long enough she will still mess up some plural words (a typical Chinese grammar mistake; there are no plurals in Chinese). My wife told me when she first came here she had some weird mix of Hong Kong, Aussie, and standard British English accents, but she quickly adapted to sound more American. Despite that she still says things like “he-li-copter” instead of “he-la-copter” as most Americans pronounce it.

Here we are maybe 3 months after we met.


Two and a half years later, getting married in HK.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 107,
            'body' => "I met my husband around four years ago when we were working in a movie theater. I had a crush on him throughout the summer and like the shy dork I was, I told everyone else instead of him. So anyways, the summer went on and I still hadn’t told him flat out. I had worked shifts with him, took my breaks with him and even tried flirting a few times. I thought I sucked at it or that he wasn’t interested because he never made a move. It was frustrating to say the least and I thought about just giving up. But he had the cutest smile and I couldn’t get over my feelings. This went on for about a month or so.

It gets to the first week of August, and I knew that it was his last week working. He went to school in Albany, and was only home for vacation. So I knew my time was running up, but again, I was a shy dork. I was working an early morning shift with one of my co-workers and ‘who’s crushing on who’ became the topic of conversation. So of course when it got to my turn, I brought up my husband. My co-worker couldn’t believe I still hadn’t told him how I was feeling. I told him that I tried flirting and getting his attention and nothing worked. Now, it just so happened that my husband was working the same shift in a different part of the theater. So my co-worker takes it upon himself to be my “wing man” and drags me over to where my husband was working. He goes straight up to him and asks if he would ever consider dating me. My husband replied without hesitation, “Hell yea!” Needless to say, I was shocked. I felt like I had put myself out there (in my own way) and so I was surprised to hear that he would even entertain the idea, when previously he hadn’t responded to my efforts. I was skeptical, because I thought he said it to spare my feelings since I was standing right there.

But eventually, I told myself to shut up and just go for it. So after my shift, I walked up to him and asked for his phone. Confused, he handed it over to me. I put my number in it and said “Just because you’re going back to school, it doesn’t mean you can’t text or call me”. I don’t remember what happened afterwards because I quickly ran off out of embarrassment. It was the boldest move I had ever made and I just knew it would backfire. But it didn't. He texted me during his shift and wanted to know if we could watch a movie together after work. I said yes and we had a good time. I found out how funny and sweet he was; he was so reserved at work and it was great that he let me see the real him. About two days after our first trip, we had our first kiss. It was in the stairwell to the employee lounge in the theater. I had been drinking underage (I know, I know bad Jaimee) and I had to go downstairs to give my parents free movie tickets. My husband escorted me and I asked him if he could smell alcohol on my breath. He told me to come closer so he could check and then kissed me. I was a goner from then. We spent the following week together before he went back to school.

By far, the hardest part of our relationship was when we were long distance. I went to school in the city, so when the summer came to an end, I kept my job at the movie theater. He went back to school 3 hours away and we made it work. But it was so hard to be away from him because we clicked so well and we were in love. I remember the first weekend I visited him and how distraught I was when it was time to leave. I realized then that I was in love with the man and I never wanted to be away from him. Not to mention, distance complicates things further than they need to be. You don’t get to see the person every day and the few hours or so that you’re free to talk on the phone or video chat, you don’t want to waste. Furthermore, you can go for weeks without seeing each other. Arguments and disagreements can become ten times worse. Insecurity becomes your worst enemy because it makes you second guess the other person’s intentions. You think that they’ll find someone closer to them and they won’t need you anymore. It’s tough and you should only enter a long distance relationship if you are truly committed to the person.

Luckily we were long distance for only two years and moved in with each other after I finished school. We had roommates then but I didn’t care because I was so happy to be able to fall asleep next to him every night. When he graduated the following year, we got our own place and it’s like having a never-ending sleepover with my best friend. And today we’ve been married for a little over a month (I know, gross lovey dovey newlywed here). There are days when I wonder what would’ve happened if I didn’t walk up to him. But I stop myself because I don’t have to think about it. He’s here, he loves me, he respects me and that’s all that matters. Sometimes the best things in life come to us when we take charge and go for it.


*P.S. My husband didn’t realize I was flirting with him because he’s completely oblivious to female attention. (So he tells me). I still think I was bad at it :)",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('replies')->insert([
            'user_id' => 102,
            'thread_id' => 107,
            'body' => "Are you ready for a wild ride?

I met my partner (officially my proximity-based future partner) on OkCupid.

My ex-husband and I had just opened up our relationship to other people (another story for another time) so I was back online, looking for potential suitors and people to interact with so I could gain a better network. We were driving through Virginia on our way to see his parents for Christmas; it was December 23, and I received a message from a man who was attractive and caught my eye.

“Why don’t more people appreciate sitting on the floor?”

In my profile, it mentions that I prefer sitting on the floor to anywhere else. I smiled and responded, and we exchanged a few messages when he sent one back: “Wait. You live in Pittsburgh? Surely, I live in Virginia. I didn’t realize you were so far away.”

We didn’t realize that OkC tracks your location if you have it turned on and sends you matches currently within your distance range, rather than those who live permanently in your distance range. I responded anyhow: “Ironically enough, I happen to currently be in Virginia with my spouse for Christmas.”

“While you’re here, would you be willing to engage in some shenanigans or are you simply looking to spend time with family?” he asked. I was down to engage in shenanigans.

My former spouse’s family is very Catholic, and I am the exact opposite. Church with them makes me uncomfortable, and they always tell me I’m not obligated to go. This man’s family was out of town for the holiday weekend, and his house was empty. He invited me to spend some time with him on Christmas Eve after he closed the shop at which he worked. I agreed, and I told my former spouse and his mother that I wasn’t going to church, and then proceeded to inform only my ex where I was headed and with whom I would be.

I was set.

After dinner on Christmas Eve, I headed out of the house around 6:30 for an hour and a half drive to his place. I didn’t mind the drive; we’d been texting since we met online and had built a generally good, albeit very, very short, relationship in the 24 hours that had since passed. When I got to his house, we went inside and he showed me around a little; we made it back to the bedroom and he sat on the edge of the bed while I stood in front of him and checked out the trinkets on his dresser. Pins, buttons, comic books, and little figurines laced the surface and I was trying to get comfortable enough to relax just a little…just enough to engage in shenanigans.

I finally looked him in the face and he patted the spot next to him on the edge of the bed, smiling, beckoning me to sit. His hand traced the side of my thigh innocently and then along my lower back, until his arm was mostly around me and his hand rested near my hip. I felt safe…comfortable. We chatted for a few more minutes as he looked at me and finally we stopped to look at the other again, when he uttered three words I’ve never been asked and will never forget:

“Wanna make out?”

I felt it then. “Oh, absolutely,”

We connected so deeply that evening. He refers to it as an act of God. I’m inclined to agree. Hands laced through hands and legs entwined. Lips locked and skin touched. It was the greatest natural connection with a person I had ever felt.

When I left, I was certain I’d never see him again, but he wanted to keep talking; he wasn’t looking for a relationship but I seemed cool, he mentioned in passing. I was okay with that. When I got back to Pennsylvania, we continued to talk…and talk…and talk, and by the end of the month we were texting fairly continuously.

As the weeks passed, we got more and more into things and before we knew it we were texting through most waking moments, watching movies together, and sharing fantastic music with one another. I caught feelings quickly, but he didn’t want to act on that and I was in denial. We were good friends…until he realized a month or so later that he, too, had feelings that he couldn’t stop feeling.

The distance makes him uncomfortable; he doesn’t want to form an official relationship with a label at this time. Beyond that, around New Year’s Eve I decided for certain that I wanted to separate from my husband and I’ve been fighting some demons since that point with regard to relationship things. We’re trying to take some time to feel this out in the sense that it is, but we have plans in the future to relocate together and once we do that, “real” dating is on. Until then, we call each other our “proximity-based future partner” and we do everything together.

We support each other, we grow together, and we appreciate and effectively communicate with one another. We watch movies together and listen to music, and take random 3 AM drives to the nearest breakfast joint and sit together and chat. Every “good night” ends with “Merry Christmas,” because when we have each other every day is Christmas all over again.

We drive hundreds of miles once a month to meet up and have some quality time together. We’re together, we say. But we’re not labeling that yet. We’re growing together and staying together, and through it all we’re starting to love one another, and I couldn’t be more grateful to have him as my person. I know he feels similarly.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
