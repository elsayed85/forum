<x-master>
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-wrapper-inner">
                <h1 class="tt-title-border">
                    Create New Topic
                </h1>
                <form method="POST" action="/topic/{{$topic->id}}/threads" class="form-default form-create-topic " >
                    @csrf
                    <div class="form-group">
                        <label for="inputTopicTitle">Thread Title</label>
                        <div class="tt-value-wrapper">
                            <input type="text" name="name" class="form-control" id="inputTopicTitle" placeholder="Subject of your topic">
                            <span class="tt-value-input">99</span>
                        </div>
                        <div class="tt-note">Describe your thread well, while keeping the subject as short as possible.</div>
                    </div>

                    <div class="pt-editor">
                        <h6 class="pt-title">Thread Body</h6>
                        <div class="pt-row">
                            <div class="col-left">
                                <ul class="pt-edit-btn">
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-quote"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-bold"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-italic"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-share_topic"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-blockquote"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-performatted"></use>
                                            </svg>
                                        </button></li>
                                    <li class="hr"></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-upload_files"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-bullet_list"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-heading"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-horizontal_line"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-emoticon"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-settings"></use>
                                            </svg>
                                        </button></li>
                                    <li><button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-color_picker"></use>
                                            </svg>
                                        </button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputTopicTitle">Category</label>
                                    <select class="form-control">
                                        <option value="Select">Covid-19</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                {{--                            <div class="form-group">--}}
                                {{--                                <label for="inputTopicTags">Tags</label>--}}
                                {{--                                <input type="text" name="name" class="form-control" id="inputTopicTags"--}}
                                {{--                                       placeholder="Use comma to separate tags">--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto ml-md-auto">
                                <button type="submit" class="btn btn-secondary btn-width-lg">Create thread</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-master>
