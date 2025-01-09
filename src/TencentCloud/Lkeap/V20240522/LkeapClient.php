<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Lkeap\V20240522;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lkeap\V20240522\Models as Models;

/**
 * @method Models\CreateAttributeLabelResponse CreateAttributeLabel(Models\CreateAttributeLabelRequest $req) 用于为问答对创建属性标签，以便对内容进行分类和管理。 使用场景：当需要为问答对添加分类标签和属性标记时使用，比如为问答对添加“售后”标签。
 * @method Models\CreateKnowledgeBaseResponse CreateKnowledgeBase(Models\CreateKnowledgeBaseRequest $req) 用于在系统中创建一个新的知识库。知识库是一个用于存储和管理知识条目的集合，可以包括文档、问答对、属性标签等。创建知识库后，可以向其中添加各种知识条目，以便在后续的知识检索中使用。 使用场景：当需要在系统中建立一个新的知识库以存储和管理特定领域或项目的知识条目时使用。例如，一个用户可能需要创建一个知识库，以存储用户指南、常见问题解答和技术文档。
 * @method Models\CreateQAResponse CreateQA(Models\CreateQARequest $req) 用于创建新的问答对。问答对可以在SearchKnowledge接口知识检索时提供匹配的答案。 使用场景：当需要添加新的知识点和对应的问答对时使用，比如为产品添加新的常见问题解答。
 * @method Models\CreateReconstructDocumentFlowResponse CreateReconstructDocumentFlow(Models\CreateReconstructDocumentFlowRequest $req) 本接口为异步接口的发起请求接口，用于发起文档解析任务。
文档解析支持将图片或PDF文件转换成Markdown格式文件，可解析包括表格、公式、图片、标题、段落、页眉、页脚等内容元素，并将内容智能转换成阅读顺序。

体验期间单账号限制qps仅为1，若有正式接入需要请与产研团队沟通开放。
 * @method Models\CreateSplitDocumentFlowResponse CreateSplitDocumentFlow(Models\CreateSplitDocumentFlowRequest $req) 用于创建一个文档拆分任务，支持多种文件类型，具备mllm能力，能够解析并深入理解图表中的信息。
 * @method Models\DeleteAttributeLabelsResponse DeleteAttributeLabels(Models\DeleteAttributeLabelsRequest $req) 用于删除不再需要的属性标签。 使用场景：当某个标签不再使用时，可以将其删除以保持标签系统的整洁。
 * @method Models\DeleteDocsResponse DeleteDocs(Models\DeleteDocsRequest $req) 用于删除已有的文档。 使用场景：当某个文档不再需要时，可以将其删除以保持文档库的整洁。
 * @method Models\DeleteKnowledgeBaseResponse DeleteKnowledgeBase(Models\DeleteKnowledgeBaseRequest $req) 用于从系统中删除一个现有的知识库。删除知识库将移除该知识库及其所有关联的知识条目（如文档、问答对、属性标签等）。该操作是不可逆的，请在执行前确认是否需要删除。**使用场景**：当某个知识库不再需要时，可以使用此接口将其从系统中删除。例如，一个项目结束后，其相关的知识库可能不再需要存储，可以使用该接口进行删除。
 * @method Models\DeleteQAsResponse DeleteQAs(Models\DeleteQAsRequest $req) 用于删除已有的问答对。 使用场景：当某个问答对不再适用或需要移除时使用。
 * @method Models\DescribeDocResponse DescribeDoc(Models\DescribeDocRequest $req) 用于查询特定文档的详细信息。 使用场景：当需要查看某个文档的具体内容和属性时使用。
 * @method Models\GetEmbeddingResponse GetEmbedding(Models\GetEmbeddingRequest $req) 本接口（GetEmbedding）调用文本表示模型，将文本转化为用数值表示的向量形式，可用于文本检索、信息推荐、知识挖掘等场景。
本接口（GetEmbedding）有单账号调用上限控制，如您有提高并发限制的需求请 [联系我们](https://cloud.tencent.com/act/event/Online_service) 。
 * @method Models\GetReconstructDocumentResultResponse GetReconstructDocumentResult(Models\GetReconstructDocumentResultRequest $req) 本接口为异步接口的查询结果接口，用于获取文档解析处理结果。
 * @method Models\GetSplitDocumentResultResponse GetSplitDocumentResult(Models\GetSplitDocumentResultRequest $req) 查询文档拆分任务结果
 * @method Models\ImportQAsResponse ImportQAs(Models\ImportQAsRequest $req) 用于批量导入问答对，最多支持50,000条数据导入。通过此接口，可以将多个问答对一次性导入系统中，以便在后续的知识检索中使用。导入的问答对可以来自外部系统、文件或其他数据源。使用场景：当需要一次性导入大量的问答对时使用。例如，一个公司可能需要将其产品的常见问题解答从一个文档或外部系统批量导入到知识库中，以便用户可以通过知识检索系统进行查询。
 * @method Models\ListAttributeLabelsResponse ListAttributeLabels(Models\ListAttributeLabelsRequest $req) 用于获取所有属性标签的列表。 使用场景：用于查看当前系统中所有已有的属性标签，方便进行管理和维护。
 * @method Models\ListDocsResponse ListDocs(Models\ListDocsRequest $req) 用于获取所有文档的列表。 使用场景：用于查看当前系统中所有已有的文档，方便进行管理和维护。
 * @method Models\ListQAsResponse ListQAs(Models\ListQAsRequest $req) 用于获取所有问答对的列表。 使用场景：用于查看当前系统中所有已有的问答对，方便进行管理和维护。
 * @method Models\ModifyAttributeLabelResponse ModifyAttributeLabel(Models\ModifyAttributeLabelRequest $req) 用于修改已有的属性标签。 使用场景：当需要更改属性标签的名称或描述时使用，比如将“售后”标签改为“售前”。
 * @method Models\ModifyQAResponse ModifyQA(Models\ModifyQARequest $req) 用于修改已有的问答对。 使用场景：当需要更新问答对的内容或答案时使用。
 * @method Models\QueryRewriteResponse QueryRewrite(Models\QueryRewriteRequest $req) 多轮改写（QueryRewrite）主要用于多轮对话中，进行指代消解和省略补全。使用本接口，无需输入prompt描述，根据对话历史即可生成更精确的用户查询。在应用场景上，本接口可应用于智能问答、对话式搜索等多种场景。
开通[产品体验](https://lke.cloud.tencent.com/lke/#/trialProduct)后可获得50wtoken体验额度。本接口（QueryRewrite）有单账号调用上限控制，如您有提高并发限制的需求请 [联系我们](https://cloud.tencent.com/act/event/Online_service) 。
 * @method Models\ReconstructDocumentSSEResponse ReconstructDocumentSSE(Models\ReconstructDocumentSSERequest $req) 准实时文档解析接口，使用HTTP SSE 协议通信。
 * @method Models\RetrieveKnowledgeResponse RetrieveKnowledge(Models\RetrieveKnowledgeRequest $req) 用于检索知识库中的文档和问答对内容。 使用场景：适用于查询长期存储在知识库中的文档和问答对，比如产品手册、用户指南等内容的检索。
 * @method Models\RunRerankResponse RunRerank(Models\RunRerankRequest $req) 基于知识引擎精调模型技术的rerank模型，支持对多路召回的结果进行重排序，根据query与切片内容的相关性，按分数由高到低对切片进行排序，并输出对应的打分结果。
 * @method Models\UploadDocResponse UploadDoc(Models\UploadDocRequest $req) 用于上传文档内容。上传的文档将存储在知识库中，可以通过SearchKnowledge知识库内容检索接口进行检索。 
使用场景：适用于需要长期存储和检索的文档内容，如产品手册、用户指南等。
 * @method Models\UploadDocRealtimeResponse UploadDocRealtime(Models\UploadDocRealtimeRequest $req) 用于上传实时文档内容。实时文档在上传后可以立即通过SearchRealtime进行实时检索，适用于在会话中对文档进行问答的场景。
 */

class LkeapClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lkeap.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lkeap";

    /**
     * @var string
     */
    protected $version = "2024-05-22";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("lkeap")."\\"."V20240522\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
