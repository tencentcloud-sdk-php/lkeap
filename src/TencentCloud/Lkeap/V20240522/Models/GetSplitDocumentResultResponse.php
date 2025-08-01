<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSplitDocumentResult返回参数结构体
 *
 * @method string getStatus() 获取任务状态。

- `Success`：执行完成
- `Processing`：执行中
- `Pause`: 暂停
- `Failed`：执行失败
- `WaitExecute`：等待执行
 * @method void setStatus(string $Status) 设置任务状态。

- `Success`：执行完成
- `Processing`：执行中
- `Pause`: 暂停
- `Failed`：执行失败
- `WaitExecute`：等待执行
 * @method string getDocumentRecognizeResultUrl() 获取拆分结果的临时下载地址。
文件类型为zip压缩包，下载链接有效期30分钟。
压缩包内包含\*.md、\*.jsonl、\*mllm.json以及images文件夹。

> **jsonl** 结构说明：
- `page_content`:
 用于生成嵌入（embedding）库，以便于检索使用。该字段中的图片将使用占位符替换。
- `org_data`:
 表示与 page_content 对应的最小语义完整性块，用于问答模型的处理。
- `big_data`:
 表示与 page_content 对应的最大语义完整性块，也用于问答模型的处理。
 * @method void setDocumentRecognizeResultUrl(string $DocumentRecognizeResultUrl) 设置拆分结果的临时下载地址。
文件类型为zip压缩包，下载链接有效期30分钟。
压缩包内包含\*.md、\*.jsonl、\*mllm.json以及images文件夹。

> **jsonl** 结构说明：
- `page_content`:
 用于生成嵌入（embedding）库，以便于检索使用。该字段中的图片将使用占位符替换。
- `org_data`:
 表示与 page_content 对应的最小语义完整性块，用于问答模型的处理。
- `big_data`:
 表示与 page_content 对应的最大语义完整性块，也用于问答模型的处理。
 * @method array getFailedPages() 获取文档拆分失败的页码
 * @method void setFailedPages(array $FailedPages) 设置文档拆分失败的页码
 * @method DocumentUsage getUsage() 获取文档拆分任务的用量
 * @method void setUsage(DocumentUsage $Usage) 设置文档拆分任务的用量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetSplitDocumentResultResponse extends AbstractModel
{
    /**
     * @var string 任务状态。

- `Success`：执行完成
- `Processing`：执行中
- `Pause`: 暂停
- `Failed`：执行失败
- `WaitExecute`：等待执行
     */
    public $Status;

    /**
     * @var string 拆分结果的临时下载地址。
文件类型为zip压缩包，下载链接有效期30分钟。
压缩包内包含\*.md、\*.jsonl、\*mllm.json以及images文件夹。

> **jsonl** 结构说明：
- `page_content`:
 用于生成嵌入（embedding）库，以便于检索使用。该字段中的图片将使用占位符替换。
- `org_data`:
 表示与 page_content 对应的最小语义完整性块，用于问答模型的处理。
- `big_data`:
 表示与 page_content 对应的最大语义完整性块，也用于问答模型的处理。
     */
    public $DocumentRecognizeResultUrl;

    /**
     * @var array 文档拆分失败的页码
     * @deprecated
     */
    public $FailedPages;

    /**
     * @var DocumentUsage 文档拆分任务的用量
     */
    public $Usage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态。

- `Success`：执行完成
- `Processing`：执行中
- `Pause`: 暂停
- `Failed`：执行失败
- `WaitExecute`：等待执行
     * @param string $DocumentRecognizeResultUrl 拆分结果的临时下载地址。
文件类型为zip压缩包，下载链接有效期30分钟。
压缩包内包含\*.md、\*.jsonl、\*mllm.json以及images文件夹。

> **jsonl** 结构说明：
- `page_content`:
 用于生成嵌入（embedding）库，以便于检索使用。该字段中的图片将使用占位符替换。
- `org_data`:
 表示与 page_content 对应的最小语义完整性块，用于问答模型的处理。
- `big_data`:
 表示与 page_content 对应的最大语义完整性块，也用于问答模型的处理。
     * @param array $FailedPages 文档拆分失败的页码
     * @param DocumentUsage $Usage 文档拆分任务的用量
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DocumentRecognizeResultUrl",$param) and $param["DocumentRecognizeResultUrl"] !== null) {
            $this->DocumentRecognizeResultUrl = $param["DocumentRecognizeResultUrl"];
        }

        if (array_key_exists("FailedPages",$param) and $param["FailedPages"] !== null) {
            $this->FailedPages = [];
            foreach ($param["FailedPages"] as $key => $value){
                $obj = new SplitDocumentFailedPage();
                $obj->deserialize($value);
                array_push($this->FailedPages, $obj);
            }
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new DocumentUsage();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
