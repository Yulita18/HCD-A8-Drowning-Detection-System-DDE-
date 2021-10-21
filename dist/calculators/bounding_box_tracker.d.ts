/**
 * @license
 * Copyright 2021 Google LLC. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * =============================================================================
 */
import { Pose } from '../types';
import { TrackerConfig } from './interfaces/config_interfaces';
import { Tracker } from './tracker';
/**
 * BoundingBoxTracker, which tracks objects based on bounding box similarity,
 * currently defined as intersection-over-union (IoU).
 */
export declare class BoundingBoxTracker extends Tracker {
    constructor(config: TrackerConfig);
    /**
     * Computes similarity based on intersection-over-union (IoU). See `Tracker`
     * for more details.
     */
    computeSimilarity(poses: Pose[]): number[][];
    /**
     * Computes the intersection-over-union (IoU) between a pose and a track.
     * @param pose A `Pose`.
     * @param track A `Track`.
     * @returns The IoU  between the pose and the track. This number is
     * between 0 and 1, and larger values indicate more box similarity.
     */
    private iou;
}
