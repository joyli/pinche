@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $title ?? '拼车信息表' }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="ibox-content">
                        <div class="row">
                                <div>
                                    <style>
                                        p {margin-left: 10px}
                                    </style>
                                    <p>法律声明:</p>
                                    <span>访问、浏览或使用京香拼车网微信公众号，表示您已阅读、理解并同意接受以下条款的约束，并遵守所有适用的法律和法规。 您一旦使用了京香拼车网，则需秉着诚信的原则遵守以下条款。</span>
                                    <hr>
                                    <p>一般原则:</p>
                                    <span>以下规则适用于所有京香拼车网用户和浏览者，并可能随时修改，您应该经常访问本页面，以便了解最新的条款，因为这些条款与您的权利和义务息息相关， 这些条款的某些条文也可能被京香拼车网平台中某些页面上或者具体服务明确指定的发了通告和条款所取代，您应该了解这些内容， 一旦接受本条款，即意味着您已经详细阅读并接受了这些被引用或者取代的条款。</span>
                                    <hr>
                                    <p>权利说明:</p>
                                    <span>北京泉溪投资管理有限公司（一下称为“本公司”）对其发行的或者合作公司共同发行的包括但不限于提供的软件及相关产品或服务的全部内容，享有知识产权， 受法律保护。如果相关内容未包含权利声明，并不代表本公司对其不享有权利或者不主张权利。您应根据法律、法规及诚信原则尊重权利人的合法权益，并合法使用该内容。未经跟公司书面许可，任何单位及个人不得以任何方式或理由对上述软件、产品、服务、信息、文字的任何部分进行使用，复制、抄录、传播、或者与其他产品捆绑使用、销售，或者以超链接形式发送、存储，但对于非商业目的的、个人使用的下载或者打印除外。上述软件中使用和显示的商标和标示，是本公司设计注册的，未经本公司书面授权许可，任何人不得以任何形式使用京香拼车网相关名称或者标示。</span>
                                    <hr>
                                    <p>用户信息:</p>
                                    <span>为京香拼车网提供相应服务之必须，您以自愿填写的方式提供注册所需的姓名，性别，年龄，电话，行驶证，驾驶证，本人照片，身份证，等个人信息和资料，则表示您已了解并接受您个人信息的用途， 同意京香拼车网为实现该特定目的使用您的个人信息。除此之外，其他任何您发送或者提供给京香拼车网的材料，信息和文本，均将视为非保密和非专有的，本公司对这些信息不承担任何义务。同时，如果您提交时 没有特别声明的，可视为同意本公司及其授权人可以因商业或者非商业的目的复制、透露、分发、合并和以其他方式利用这些信息，数据、图像、声音、文本及其他内容。您可以阅读下面的相关隐私政策以了解更加详细的内容。</span>
                                    <hr>
                                    <p>责任限制声明:</p>
                                    <span>不论在任何情况下，京香拼车网对由信息网络设备维护、信息网络连接故障、智能终端、通信或其他系统的故障，电力故障、罢工、劳动争议、暴乱、起义、骚乱、火灾、洪水、风暴、爆炸、战争、政府行为、司法行政机关的命令、其他不可抗力或者 第三方的不作为而造成的不能服务或者延期服务不承担责任。无论在任何情况下（包括但不限于疏忽原因），由于使用京香拼车网的信息或者由京香拼车网链接的信息，或者其他与京香拼车网平台链接的网站信息，对您或者他人操作任何损失或者损害（包括直接、间接、特别或后果性的损失或损害，例如收入或者利润的损失，智能终端系统之损坏或数据丢失等后果），均由使用者自行承担责任（包括但不限于疏忽责任）。京香拼车网所载的信息，包括但不限于文本、图片、数据、观点、网页或链接，虽然力图准确详尽，但是京香拼车网并不就其中所包含的信息和内容的准确、完整、充分和可靠性做任何承诺。京香拼车网 表明不对这些信息和内容的错误或遗漏承担责任，也不对这些信息的内容作出任何明示或者默示的、包括但不限于没有侵犯第三方权利、质量和没有智能终端病毒的保证。</span>
                                    <hr>
                                    <p>第三方链接:</p>
                                    <span>京香拼车网可能保留有第三方网站或者网址的链接，是否访问这些链接将由用户自己做出决定，京香拼车网并不就这些链接上所提供的任何信息、数据、观点、图片、陈述、或建议的准确性、完整性、充分性和可靠性提供承诺或者保证。京香拼车网没有审查过任何第三方网站，对这些 网站及其内容不进行控制，也不负任何责任，如果您决定访问任何与本站链接的第三方网站，其可能带来的结果和风险全部由您自己承担。</span>
                                    <hr>
                                    <p>服务免责声明:</p>
                                    <span>在本拼车平台上向您提供的信息、推荐的服务，仅供您参考，并不构成建议。我们将在合理的范围内尽力保证信息的准确合法，但是无法保证其中没有任何错误，缺陷，恶意信息，和病毒。对于因使用（或无法使用）网站或微信拼车平台导致的任何伤害（包括人身伤亡），我们不承担任何责任（除非此类伤害由我们的故意或重大疏忽造成），此外，因使用（或无法使用）与网站或微信拼车平台的电子通信手段，导致的任何伤害，包括（但不限于）因电子信息传达失败或者延时，第三方或用于电子通讯的计算机程序对电子通信的拦截或操纵，以及病毒传播导致的伤害，我们不承担任何责任。如遇信息的不真实或者车主（或乘客）临时违约，甚至欺诈，诈骗，威胁等暴力犯罪侵害，请及时拨打110报警解决，本平台不对信息的真实性，合理性，合法性承担任何法律责任。请车主（或乘客）自行判断，并采取积极的防范措施。如果在服务进行过程中，发生导致司机或者乘客身心伤害（包括但不限于因用户疾病引发的交通事故伤亡、猝死、其他刑事犯罪导致的后果），京香拼车网会尽力配合相关行政部门提供证据，但是不承担任何赔偿责任。</span>
                                    <hr>
                                    <p>隐私策略:</p>
                                    <span>京香拼车网非常重视对您的个人隐私保护，我们将按照本隐私政策收集、使用、共享和保护您的个人信息。在您使用京香拼车网的产品和服务前，请您仔细阅读并全面了解本政策。如果您是未成年人，您的监护人需要仔细阅读本政策并同意您依据本政策使用我们的产品和服务。 对于本政策中与您的权益存在重大关系的条款，我们已将字体加粗和提示您注意，当您浏览、访问京香拼车网平台及或使用京香拼车网任一产品或服务时，即表示您已经同意我们按照本政策来收集、使用、共享和保护您的个人信息。我们收集、使用、共享和保护您的个人信息，是在遵守国家法律法规规定的前提下，出于向您提供京香拼车网的产品和服务并不断提升产品或服务质量的目的，包括但不限于支持我们开展京香拼车网产品及服务相关的市场活动、完善现有产品及服务功能、开发新产品及新服务。</span>
                                    <hr>
                                    <p>信息的收集范围:</p>
                                    <span>您授权我们收集您的以下个人信息：</span>
                                    身份识别信息，包括但不限于您的姓名，身份证明，联系地址，电话号码，生物特征信息；
                                    对于司机类用户，出身份识别信息以外，我们还会收集您的车辆、行驶证、驾驶证等信息；
                                    <span>您所处的地理位置及目的地信息；</span>
                                    平台操作信息，包括但不限于您的IP地址，设备型号，设备标示符、操作系统版本信息；
                                    行程信息，包括但不限于您的出发地、到达地、路线、途径地点及里程数信息；
                                    个人信用信息，包括但不限于关于您的任何信用状况、信用分、信用报告信息；
                                    其他根据我们具体产品及服务的需要而收集的您的个人信息，包括但不限于您对我们产品和服务的意见、建议、您曾经使用或者经常使用的移动应用软件及使用场景和使用习惯等信息。
                                    <hr>
                                    <p>信息收集方法:</p>
                                    <span>您授权我们通过以下方法收集您的个人信息：</span>
                                    我们将收集和存储在您浏览、访问京香拼车网平台或服务时主动向我们提供的信息；
                                    我们将收集和存储我们向您提供京香拼车网出行产品或服务的过程中记录的与您有关的信息；
                                    我们将收集和存储您通过我们的客服人员或其他渠道主动提交或反馈的信息；
                                    我们将向关联公司、商业合作伙伴及第三方独立资料来源，收集和存储其合法获得的与您有关的信息；
                                    我们将向依法设立的征信机构查询与您相关的信用信息，包括但不限于任何信用分、信用报告等；
                                    <hr>
                                    <p>信息的用途:</p>
                                    <span>您授权我们出于以下用途使用您的个人信息：</span>
                                    向您提供京香拼车网产品及服务，并运行京香拼车网相关网站、微信公众号及APP的管理和优化；
                                    提供和改善京香拼车网现有产品及服务的功能和质量，包括但不限于产品及服务内容的个性化定制和更新；
                                    开展京香拼车网产品和服务相关的市场活动，向您推送最新的市场活动信息及优惠方案；
                                    设计、开发、推广全新的产品及服务；
                                    提高京香拼车网产品和服务的安全性、包括但不限于身份验证、客户服务、安全防范、诈骗检测、存档和备份；
                                    协助行政机关、司法机构等有权机关开展调查，并遵守适用法律法规及其他向有权机关承诺的义务；
                                    在收集信息时所通知您的用途以及上述任何用途有关的其他用途；
                                    此外，我们可能向您发送与上述用途有关的信息和通知，包括但不限于为保证服务完成所必须的验证码、适用产品或服务时所必要的推送通知、当前用车费用优惠以及减免信息、关于京香拼车网产品或服务的新闻以及市场活动及优惠促销信息。
                                    <hr>
                                    <p>信息的共享:</p>
                                    <span>我们对您的个人信息承担保密义务，但您授权我们在下列情况下将您的信息与第三方共享：</span>
                                    为了提升我们产品和服务质量或向您提供全新的产品和服务，我们会在关联公司内部共享你的相关信息，也可能将我们手机的信息提供给第三方用于分析和统计；
                                    如果您通过京香拼车网平台使用的某些产品及服务是由我们的合作伙伴提供的，或是由我们与合作伙伴或供应商共同提供的，我们将与其共享向您提供相应产品和服务所必须的信息；
                                    根据法律法规的规定及商业惯例，我们需要接受第三方的审计和尽职调查时，可能向其提供您的相关信息；
                                    根据法律法规的规定或行政机关、司法机关等有权机关的要求，我们会向其提供您的相关信息；
                                    其他经您同意或授权可以向第三方提供的个人信息的情况。
                                    <hr>
                                    <p>信息的安全及保护措施:</p>
                                    本公司将采用严格的安全制度以及行业通行的安全技术和程序来确保您的个人信息不丢失、泄露、损毁或被滥用和变造；
                                    我们将采用行业通行的安全技术和程序，来保护您的个人信息不被未经授权的访问和使用；
                                    我们的员工及服务外包人员将受到保密协议的约束，同时还将受到数据信息的权限控制和操作监控；
                                    请注意，任何安全系统都存在可能的及未知的风险。
                                    您的交易相对方，您访问的第三方网站经营者，您使用的第三方服务提供者和通过我们获取您的个人信息的第三方可能有自己的隐私保护政策及获取您个人信息的方法和措施，这些第三方 隐私保护政策、获取个人信息的方法和措施将不会受到我们的控制。虽然我们将可能接触到你的个人信息的我们的合作方及供应商等第三方签署保密协议并尽合理的努力督促其履行保密义务， 但我们无法保证第三方一定按照我们的要求采取保密措施，我们亦不对第三方的行为及后果承担任何责任。
                                    作为用户，您可根据您的意愿决定是否使用京香拼车网平台的服务，是否主动提供个人信息的同时。同时，您可以查看您提供给我们的个人信息及行程信息。如果您希望删除或者更正您的个人信息，请联系我们的客服人员。
                                    如果我们检测到您将京香拼车网的产品及服务以及相关信息用于欺诈或非法目的，我们将会采取相应措施，包括但不限于中止或终止向您提供任何产品或服务。
                                    <hr>
                                    <p>变更:</p>
                                    <span>随着京香拼车网服务的进一步提升，隐私策略的内容会随时更新，更新后的隐私策略一旦在本应用程序上公布即有效代替原来的隐私策略，我们鼓励您定期查看本页以了解我们对隐私保护的最新措施。</span>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection