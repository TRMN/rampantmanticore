<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rampant Manticore Awards</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"
            integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/trmn-fonts.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/css/core.css" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <script type="text/javascript">
        var MTIProjectId = '5c059f73-3466-4691-8b9a-27e7d9c1a9c7';
        (function () {
            var mtiTracking = document.createElement('script');
            mtiTracking.type = 'text/javascript';
            mtiTracking.async = 'true';
            mtiTracking.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//fast.fonts.net/t/trackingCode.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mtiTracking);
        })();
    </script>
</head>
<body>
<div class="container" style="width: 75%;">
    <header class="row">
        <div class="col-md-5 vrt-ctr-parent"><img src="{{asset('images/rampantmanticore.svg')}}" style="height: 100%;"></div>
        <div class="col-md-7 text-center vrt-ctr-parent"><p class="h2 rmgold prociono">The First Annual</p>
            <p class="h1 rmheader">RAMPANT<br/>MANTICORE</p>
            <p class="h2 rmgold prociono">Military Science Fiction & Fantasy Awards</p>
        </div>
    </header>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#about">About</a></li>
                <li><a data-toggle="tab" href="#rules">Rules</a></li>
                <li><a data-toggle="tab" href="#login">@if( !Auth::check() )
                            Login
                        @else
                            Vote
                        @endif</a></li>
            </ul>

            <div class="tab-content">
                <div id="about" class="tab-pane active">
                    <p>The Rampant Manticore is a series of awards for the best Military fiction in the genres of
                        Science Fiction and Fantasy. It is sponsored by The Royal Manticoran Navy: The Official Honor
                        Harrington Fan Association, Inc. To be eligible to vote, you must have been a member of TRMN for
                        one calendar year before voting starts, and you need to have participated academically with our
                        academy and completed the initial course.</p>

                    <p>This is an annual award, with the levels of novel, novella, and short story for both science
                        fiction and fantasy. There is also an overall award, the H. Beam Piper Award, which if for the
                        overall best work, regardless of the category. To start voting, please click on
                        the @if( !Auth::check() )
                            Login
                        @else
                            vote
                        @endif
                        tab.</p>
                </div>
                <div id="rules" class="tab-pane">
                    <p>The Rampant Manticore Awards are awards, sponsored by The Royal Manticoran Navy and the H. Beam
                        Piper Memorial, for the best Military Science Fiction and Fantasy novels, published in the
                        preceding year.</p>
                    <H2 class="IncisedBoldCd">QUALIFICATIONS FOR AUTHORS</H2>
                    <H3>PUBLICATION</H3>
                    <p>To be eligible for the award, your novel, novella or short story must be published as a
                        standalone work, in the case of the novel and novella, or as part of a collection, in the case
                        of the short story, between January 1 and December 31st of the preceding year. As an example,
                        for the award issued in 2016, your piece must have been published in 2015. See Language for the
                        one exception.</p>
                    <p>Publication is defined as any work published by a publishing house, or self-published, in which
                        case The Rampant Manticore Award Coordinator must be made aware of your work via a web form on
                        The Rampant Manticore website.</p>
                    <h3>LANGUAGE</h3>
                    <p>To be eligible for the awards, your work must be in English, or an English translation must be
                        available. The publication date of your English translation will count as the publication date
                        for the purposes of this award.</p>
                    <h3>CATEGORIES</h3>
                    <p>For the purpose of this award, a novel is classified as any piece containing 60,000 words or
                        more.</p>
                    <p>For the purpose of this award, a novella is classified as any piece containing 17,000 – 60,000
                        words or more.</p>
                    <p>For the purpose of this award, a short story is classified as any piece containing 17,000 words
                        or less combining the novelette and short story totals based on the guidelines of the Science
                        Fiction and Fantasy Writers of America.</p>
                    <p>These lengths will be revisited and adjusted every five years to reflect the reality of the works
                        published.</p>
                    <h3>PREVIOUS WINNERS</h3>
                    <p>You are not eligible to win a Rampant Manticore two years in a row. But you will be given the
                        ability to cast a special vote, discussed in the voting section, for the award the year after
                        you win.</p>
                    <h3>CATEGORIES OF THE AWARD</h3>
                    <p>The Rampant Manticore will have seven (7) categories, which are as follows:</p>
                    <h4>BEST AUTHOR – THE H BEAM PIPER MEMORIAL AWARD</h4>
                    <p>This award is issued to the best author overall of Military Science Fiction or Fantasy,
                        regardless of other category of work.</p>
                    <h4>BEST AUTHOR – MILITARY SCIFI NOVEL</h4>
                    <p>This award is given to the author whose work is deemed to be the best novel among the Military
                        Science Fiction genre writers nominated for the award.</p>
                    <h4>BEST AUTHOR – MILITARY FANTASY NOVEL</h4>
                    <p>This award is given to the author whose work is deemed to be the best novel among the Military
                        Fantasy genre writers nominated for the award.</p>
                    <h4>BEST AUTHOR – MILITARY SCIFI NOVELLA</h4>
                    <p>This award is given to the author whose work is deemed to be the best novella among the Military
                        Science Fiction genre writers nominated for the award.</p>
                    <h4>BEST AUTHOR – MILITARY FANTASY NOVELLA</h4>
                    <p>This award is given to the author whose work is deemed to be the best novella among the Military
                        Fantasy genre writers nominated for the award.</p>
                    <h4>BEST AUTHOR – MILITARY SCIFI SHORT STORY</h4>
                    <p>This award is given to the author whose work is deemed to be the best short story among the
                        Military Science Fiction genre writers nominated for the award.</p>
                    <h4>BEST AUTHOR – MILITARY FANTASY SHORT STORY</h4>
                    <p>This award is given to the author whose work is deemed to be the best short story among the
                        Military Fantasy genre writers nominated for the award.</p>
                    <h2>NOMINATIONS</h2>
                    <h3>NOMINATION PROCEEDURE</h3>
                    <p>Nominations will be accepted in both paper and electronic format based on qualifications of the
                        nominator. All physical attendees at MantiCon, based in Minneapolis, MN will be eligible to
                        nominate in person on paper ballot, by Saturday at noon at the convention. Purchase of a
                        supporting membership is not enough to rank a nominee, unless you are also a member of The Royal
                        Manticoran Navy and meet the requirements. All members of The Royal Manticoran Navy who are not
                        attending MantiCon, and who have been a member for at least one full year, and have passed their
                        first exam, will be given a chance to vote electronically on the Monday before the
                        convention.</p>
                    <p>The Ballots for Nomination will contain every Military Science Fiction or Fantasy piece,
                        published the preceding year, which falls into one of the above categories, and compiled by the
                        Rampant Manticore Coordinator.</p>
                    <p>Each person will get to pick three pieces per category, where possible, and rank them as 1, 2, or
                        3.</p>
                    <p>For those nomination rankings delivered electronically, points will be assigned as follows: 1 =
                        3pts, 2 = 2pts, 3 = 1pts.</p>
                    <p>For those ranking their nominees in person at MantiCon, points will be assigned as follows: 1 =
                        6pts, 2 = 4pts, 3 = 2pts.</p>
                    <p>The nominations will be tallied up at MantiCon, and the final list of those nominated for the
                        awards will be announced Saturday evening.</p>
                    <h3>NOMINATION MECHANICS</h3>
                    <p>When the votes are tallied, the top three authors in each award category will receive the
                        nominations. It is possible to be nominated for both the Weber Prize and an additional Rampant
                        Manticore in one of the other categories.</p>
                    <h3>DISQUALIFICATIONS</h3>
                    <p>If you are an author of one of the nominated works, you are ineligible to vote for a nomination.
                        Additionally, if you are a member of The Royal Manticoran Navy, with a membership of less than
                        one year, or have not completed your first exam, you are ineligible to vote.</p>
                    <h3>AWARD VOTING</h3>
                    <p>Voting for the award is similar to voting for the nominations with the exception that it occurs
                        at HonorCon, in Raleigh, NC in October/November, and you must physically attend the convention
                        to vote for the award winner. Purchase of a supporting membership is not enough to vote, unless
                        you are also a member of The Royal Manticoran Navy and meet the membership requirements. All
                        members of The Royal Manticoran Navy who are not attending HonorCon, and who have been a member
                        for at least one full year, and have passed their first two exams, will be given a chance to
                        vote electronically on the Monday before the convention.</p>
                    <p>Paper ballots will be distributed with all pre-registration packets and all memberships purchased
                        at the door on Friday and Saturday through noon. Ballots must be delivered to the designated
                        voting area by 1pm on Saturday. Each person will be asked to select one of the nominees in each
                        category for their vote. Each vote is worth 1pt, with one exception. The winner of the previous
                        year’s awards (after the first year), will be permitted to mail in a ballot if they are unable
                        to attend, and their vote will each count for 5pts.</p>
                    <h3>DISQUALIFICATIONS</h3>
                    <p>If you are an author of one of the nominated works, you are ineligible to vote for the final
                        award. Additionally, if you are a member of The Royal Manticoran Navy, with a membership of less
                        than one year, or have not completed your first two exams, you are ineligible to vote for the
                        final award.</p>
                    <h3>VOTING DISPUTES</h3>
                    <p>All voting disputes will be resolved by a majority vote of The Royal Manticoran Navy Royal
                        Council and Space Lords, totaling eleven votes. The Chairman of the Royal Council will abstain,
                        except to break a tie if one is caused by any Council Member or Space Lord abstaining, or by a
                        split vote.</p>
                    <h3>VOTE COUNTING</h3>
                    <p>An outside, third party will be used to count and tally the votes at MantiCon and HonorCon, and
                        to confirm the electronic votes of The Royal Manticoran Navy membership, to ensure no bias from
                        The Royal Manticoran Navy.</p>
                    <h3>TRANSPARENCY</h3>
                    <p>To ensure this is all done in a transparent manner, the vote tallies will be posted publically at
                        MantiCon for the nominees, and at HonorCon for the finalists. They will also be posted the
                        webpage <a href="http://www.rampantmanticore.com">http://www.rampantmanticore.com</a> which will
                        be set up for the Rampant Manticore Award.
                        Full names of voters will be removed, but the vote counts will be posted and the weight of each
                        vote, for the nomination phase, will be shown.</p>
                    <p>This award is about the quality of the work, and not the politics of the author. Should politics
                        become an issue, further voting restrictions may be enacted to ensure the apolitical quality of
                        the Rampant Manticore remains intact.</p>
                    <h3>AWARD CEREMONY</h3>
                    <p>The award ceremony will be held on Saturday evening at HonorCon, in Raleigh, NC, in
                        October/November.</p>
                    <p>The Emcee will announce the winners by the process of opening sealed envelopes, which have been
                        prepared by the third party tallying the vote.</p>
                    <p>Each award winner will be presented with a trophy and certificate.</p>
                </div>
                <div id="login" class="tab-pane">
                    @if( !Auth::check() )
                        <p>Login with your <a href="https://medusa.trmn.org">MEDUSA</a> credentials to start voting</p>
                        {{ Form::open( [ 'route' => 'signin' ] ) }}
                        <div class="row">
                            <div class="col-md-offset-1 col-md-5">
                                {{ Form::label( 'email', 'Email' ) }}<br/>{{ Form::email( 'email' ) }}
                            </div>
                            <div class="col-md-5">
                                {{ Form::label( 'password', 'Password' ) }}<br/> {{ Form::password( 'password' ) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10 text-right">
                                <br/> {{ Form::submit( 'Sign in', [ 'class' => 'button' ] ) }}
                            </div>
                            {{ Form::close() }}
                        </div>
                </div>
                @else
                    @if(Auth::user()->checkEligibility() === true && Auth::user()->alreadyVoted() === false)
                        <h1>Please select and rank (i.e. 1, 2, 3) your top three picks in each category.</h1>
                        <?php $category = ''; ?>
                        {{ Form::open( [ 'route' => 'vote' ] ) }}
                        @foreach(Nominee::all() as $nominee)
                            @if($nominee->category != $category)
                                <?php $category = $nominee->category; ?>
                                <h2>{{$category}}</h2>
                            @endif
                            <p>{{Form::select($nominee->id, [0 => 'Rate', 1, 2, 3]);}} {{$nominee->nominee}}</p>
                        @endforeach
                        <p>{{ Form::submit( 'Vote!', [ 'class' => 'button' ] ) }}</p>
                        {{Form::close()}}
                    @else
                        @if (Auth::user()->alreadyVoted() === true)
                            <p>You are only allowed to vote once.</p>
                        @else
                            <p>We're sorry, but you are currently not eligible to vote on for the nominees.</p>
                        @endif
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
